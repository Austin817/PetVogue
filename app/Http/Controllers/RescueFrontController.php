<?php

namespace App\Http\Controllers;

use App\Rescue;
use Illuminate\Http\Request;

class RescueFrontController extends Controller
{
      //救援首頁
      public function rescuesIndex()
      {
          $rescueDetail = Rescue::orderBy('sort','asc')->get();
          return view('front.rescues.index',compact('rescueDetail'));
      }
}
