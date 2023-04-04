<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){

    $sers=service::all();
    return view('pages.service.list',compact('sers'));
    }

    public function create(){
        return view('pages.service.form');
    }

    public function store(Request $request){
        Service::create([
        'cat_id'=>$request->cat_id,
        'name'=>$request->name,
        'image'=>$request->image,
        'status'=>$request->status,
        'description'=>$request->description

        ]);

        return redirect()->route('service.list');

        }
}
