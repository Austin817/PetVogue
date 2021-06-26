<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class EventFrontController extends Controller
{
     //活動首頁
     public function Index()
     {
        $activityDetail = Activity::get();
         return view('front.event.index',compact('activityDetail'));
     }
}
