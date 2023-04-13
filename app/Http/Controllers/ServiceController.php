<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){

    $sers=Service::with('category')->get();
    return view('pages.service.list',compact('sers'));
    }

    public function create(){

        $cat=ServiceCategory::all();
        return view('pages.service.form',compact('cat'));
    }

    public function store(Request $request){

      

        $filename='';
        if($request->hasFile('image'))
        {
            $filename=date('ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')-> storeAs('/uploads',$filename);
        }

        Service::create([
        'name'=>$request->name,
        'image'=>$filename,
        'status'=>$request->status,
        'description'=>$request->description,
        'cat_id'=>$request->cat_id


        ]);

        return redirect()->route('service.list');

        }

        public function view($id){

            $service=Service::find($id);
            return view('pages.service.view',compact('service'));
              }
      
          public function delete($id){
      
              Service::find($id)->delete();
              toastr()->success('successfully deleted');
              return redirect()->back();
      }
}
