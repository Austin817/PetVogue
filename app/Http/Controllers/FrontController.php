<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        $productsData = Product::with('linkProductType')->get();
        return view('front.index.front_index',compact('productsData'));
    }


}
