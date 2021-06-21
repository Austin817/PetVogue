<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateFrontController extends Controller
{
    //
    public function index()
    {

        return view('front.donate.donate_index');

    }

}
