<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x = 1 + 1 + 1 + 10231 + 3284;
        return view('home',compact('x'));
    }

    public function info()
    {
       return view('info.index');
    }


}
