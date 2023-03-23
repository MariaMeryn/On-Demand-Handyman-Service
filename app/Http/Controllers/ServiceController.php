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
        'name'=>$request->name,
        'status'=>$request->status

        ]);

        return redirect()->route('service.list');

        }
}
