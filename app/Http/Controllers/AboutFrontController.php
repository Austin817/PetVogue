<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutFrontController extends Controller
{
    //
    public function index()
    {
        return view('front.about.about_us');
    }
}
