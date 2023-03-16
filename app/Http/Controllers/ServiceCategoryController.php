<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function servicecategory()
    {   
        $cat=ServiceCategory::all();
        return view('pages.servicecategory',compact('cat'));
    }

    public function create()
    {
        
        return view('pages.create');
    }
  
   
    public function store(Request $request)
    {
           ServiceCategory::create([
          //table column name => input field name
          'name'=>$request->cat_name,
          'status'=>$request->status,
          'description'=>$request->description
     ]);

         return redirect()->route('servicecategory');

    }


   }
