<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home()
    {
        return view('partials.master');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }
}
