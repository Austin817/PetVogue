<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
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
    










}
