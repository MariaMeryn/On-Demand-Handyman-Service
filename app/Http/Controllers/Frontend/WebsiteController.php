<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function web(){
        $service=Service::all();

        return view('website.master',compact('service'));
    }
}
