<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use Illuminate\Http\Request;

class ShopFrontController extends Controller
{
    //
    public function index(Request $request)
    {
        // if($request->typeId){

        //     $productsData = Product::with('linkProductType')->where('type_id',$request->typeId)->get();

        // }else{

        //     $productsData = Product::with('linkProductType')->get();
        // }
        $productsData = Product::with('linkProductType')->get();
        $id = $request->typeId;
        return view('front.shop.shop_index',compact('productsData','id'));
    }



    public function detail($id)
    {
        $productData = Product::with('linkProductType','linkProductImg')->find($id);
        $productsNext = Product::with('linkProductType')->get();
        return view('front.shop.shop_detail',compact('productData','productsNext'));
    }

}

