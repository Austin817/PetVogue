<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonateFrontController extends Controller
{
    //
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
    
        $order_no= 'DP' . time() . rand(1, 9999);

        dd($order_no,$request->all());

    }

}
