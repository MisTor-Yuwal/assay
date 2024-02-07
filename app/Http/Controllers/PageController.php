<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function buy()
    {
        return view('buymeacamera');
    }
    public function secret()
    {
        return view('secret');
    }
    public function milap()
    {
        return view('vid');
    }
    // public function secret()
    // {
    //     return view('home');
    // // }
    // public function home()
    // {
    //     return view('home');
    // }
}
