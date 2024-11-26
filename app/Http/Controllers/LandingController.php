<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LandingController extends Controller
{
    public function index(){
        return view('landing.index');
    }

    public function faq()
    {
        return view('landing.faq'); // The view file located in resources/views/faq/index.blade.php
    }

    public function tac()
    {
        return view('landing.tac'); // The view file located in resources/views/faq/index.blade.php
    }
}
