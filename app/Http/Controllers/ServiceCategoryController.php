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
        
        return view('pages.form');
    }
  
   
    public function store(Request $request)
    {
           ServiceCategory::create([
          //table column name => input field name
          'name'=>$request->cat_name,
          'status'=>$request->status,
          'description'=>$request->description
     ]);

         return redirect()->route('servicecategory.list');

    }

         public function view($id){
            $cat=ServiceCategory::find($id);
            notify()->success('view!');
            return view('pages.servicecategory.view',compact('cat'));
         }

         public function delete($id){
            ServiceCategory::find($id)->delete();
            notify()->success('Deleted!');
            return redirect()->back();

         }


   }
