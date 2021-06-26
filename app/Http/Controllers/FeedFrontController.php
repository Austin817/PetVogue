<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedFrontController extends Controller
{
     //活動首頁
     public function feedsIndex()
     {
         return view('front.feed.index');
     }
 
     //活動內頁
     public function feedsCreate()
     {
         return view('front.feed.create');
     }
}
