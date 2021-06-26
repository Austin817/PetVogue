<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityFrontController extends Controller
{
    //活動首頁
    public function activitiesIndex()
    {
        $activityDetail = Activity::get();
        return view('front.activities.index',compact('activityDetail'));
    }

    //活動內頁
    public function activitiesContent($id)
    {
        $activity = Activity::find($id);
        return view('front.activities.content',compact('activity'));
    }
}
