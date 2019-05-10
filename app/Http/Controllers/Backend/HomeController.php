<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;



class HomeController extends backendcontroller
{
    /**
     * Create a new controller instance.
     *
     


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct(){

        $this->middleware('check-menbre');
     }


    public function index()
    {
          
        return view('backend.home');
    }
}
