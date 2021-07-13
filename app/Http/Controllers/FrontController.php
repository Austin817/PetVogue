<?php

namespace App\Http\Controllers;

use App\House;
use App\Article;
use App\Product;
use App\IndexSwiper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    //
    public function index()
    {
        $indexswiperData = IndexSwiper::orderBy('sort','asc')->get();
        $houseData = House::orderBy('sort','asc')->get();
        $articleData = Article::with('articleLabel')->get();
        $productsData = Product::with('linkProductType')->get();
        $adopts = Http::get('https://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL')->json();
        if ($adopts==null) {
            return view('front.index.front_index_02',compact('indexswiperData','adopts','houseData','articleData','productsData'));
        }else{
            return view('front.index.front_index',compact('indexswiperData','adopts','houseData','articleData','productsData'));

        }

    }


}
