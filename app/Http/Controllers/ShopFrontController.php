<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopFrontController extends Controller
{
    //
    public function index()
    {

        return view('front.shop.shop_index');

    }

    public function detail()
    {

        return view('front.shop.shop_detail');

    }
}
