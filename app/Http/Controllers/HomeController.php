<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home ()
    {
        return view('Backend.master');
    }

    public function dashboard(){

    return view('pages.Dashboard');
}
}
