<?php

namespace App\Http\Controllers;

use App\Models\Serviceman;
use Illuminate\Http\Request;

class ServicemanController extends Controller
{
    public function serviceman()
    {   
        $servicemans=Serviceman::all();
        return view('pages.serviceman.list', compact('servicemans'));
    }

    public function list()
    {
        return view('pages.serviceman.form');
    }

    public function store(Request $request) {
    Serviceman::create([
    //table column name => input field name
    'name'=>$request->name,
    'address'=>$request->address,
    'contact'=>$request->contact,
    'gender'=>$request->gender,
    'status'=>$request->status
    ]);
        return redirect()->route('serviceman.list');
     
    }

    
}
