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
  
   
    public function store(Request $request){

        //dd($request->all());
        $filename='';
        if($request->hasFile('image'))
        {
            $filename=date('ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')-> storeAs('/uploads',$filename);
        }
        
           ServiceCategory::create([
          //table column name => input field name
          'name'=>$request->cat_name,
          'status'=>$request->status,
          'image'=>$filename,
          'description'=>$request->description

     ]);

         return redirect()->route('servicecategory.list');

    }

         public function view($id){
            $cat=ServiceCategory::find($id);
            return view('pages.servicecategory.view',compact('cat'));
         }

         public function delete($id){
            ServiceCategory::find($id)->delete();
            toastr()->success('successfully deleted');
            return redirect()->back();

         }


   }
