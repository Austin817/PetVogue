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
        $adopts = Http::get('https://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL')->json();
        $indexswiperData = IndexSwiper::orderBy('sort','asc')->get();
        $houseData = House::orderBy('sort','asc')->get();
        $articleData = Article::with('articleLabel')->get();
        $productsData = Product::with('linkProductType')->get();
        return view('front.index.front_index',compact('indexswiperData','adopts','houseData','articleData','productsData'));
    }


}
