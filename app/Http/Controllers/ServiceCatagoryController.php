<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceCatagoryController extends Controller
{
    public function servicecatagory(){
        return view('pages.servicecatagory');
    }



    public function create(){
        return view('pages.create');
    }
  
   


}
