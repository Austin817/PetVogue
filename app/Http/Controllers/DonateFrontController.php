<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use Illuminate\Support\Facades\Auth;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class DonateFrontController extends Controller
{
    //
    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }
    
    public function index()
    {

        return view('front.donate.donate_index');

    }
    
    public function cash()
    {

        return view('front.donate.donate_info_01');

    }
    
    public function cashSave(Request $request)
    {
        $user = Auth::user();
        $order_no= 'DP' . time() . rand(1, 9999);
        $user_id = $user->id;

        dd($order_no,$user_id,$request->all());
        // 'user_id' => $user->id,
        // 'order_no' => 'DP' . time() . rand(1, 9999),

    }

    










}
