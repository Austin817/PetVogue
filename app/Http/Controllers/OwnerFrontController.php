<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerFrontController extends Controller
{
    //
    public function index()
    {

        return view('front.adopt.adopt_index');

    }
}
