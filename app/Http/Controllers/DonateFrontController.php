<?php

namespace App\Http\Controllers;

use App\OrderStatus;
use App\DonateCashData;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class DonateFrontController extends Controller
{
    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }
    
// 捐款首頁👇
    public function index()
    {

        return view('front.donate.donate_index');

    }

// 捐贈表單👇
public function goods(Request $request)
{

    if ($request) {

        Session::put('name', $request->name);
        Session::put('price', $request->price);
        Session::put('county', $request->county);
        Session::put('district', $request->district);
        Session::put('zipcode', $request->zipcode);
        Session::put('address', $request->address);

        $donateCollection = Session::all();
        $donatename = $donateCollection['name'];
        
        // dd($donateCollection,$donateCollection['price'],$donatename);
        return view('front.donate.donate_check_02', compact('donateCollection'));

    };
    return 'fail';

}


// 捐款金流👇
    public function cash()
    {

        return view('front.donate.donate_info_01');

    }
    
    public function cashSave(Request $request)
    {
    
        if ($request) {

            Session::put('name', $request->name);
            Session::put('price', $request->price);
            Session::put('county', $request->county);
            Session::put('district', $request->district);
            Session::put('zipcode', $request->zipcode);
            Session::put('address', $request->address);

            $donateCollection = Session::all();
            $donatename = $donateCollection['name'];
            
            // dd($donateCollection,$donateCollection['price'],$donatename);
            return view('front.donate.donate_check_02', compact('donateCollection'));

        };
        return 'fail';

    }

    public function cashPay(Request $request)
    {
        $user = Auth::user();
        $donate = Session::all();
        if($user != null)
        {
            $userId = Auth::user()->id;
        };
        $userId = null;

        $order = DonateCashData::create([
            'user_id' => 0,
            'order_no' => 'DP' . time() . rand(1, 9999),
            'name' => $donate['name'],
            'county' => $donate['county'],
            'district' => $donate['district'],
            'zipcode' => $donate['zipcode'],
            'address' => $donate['address'],
            'price' => $donate['price'],
        ]);
        
        // dd($order,$request->all(),$donate);
        $items=[];


            $new_ary = [
                'name' => 1,
                'qty' => 1,
                'price' => $donate['price'],
                'unit' => '個'
            ];
            array_push($items, $new_ary);


            //第三方支付
            $formData = [
            'UserId' => $order->user_id, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $items,
            'OrderId' => $order->order_no,
            'TotalAmount' => $order->price,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];

        
        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
    }

    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                //目前是顯示所有資料將其DD出來
                dd($this->checkoutResponse->collectResponse($serverPost));
            }
        }
    }




}
