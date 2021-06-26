<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdoptFrontController extends Controller
{
     //認養首頁
     public function adoptIndex()
     {
         return view('front.adopts.index');
     }
 
     //認養內頁
     public function adoptContent()
     {
        $adopts = Http::get('https://data.coa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL')->json();
         return view('front.adopts.content',compact('adopts'));
     }
}
