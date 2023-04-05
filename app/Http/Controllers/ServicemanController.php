<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\Serviceman;
use Illuminate\Http\Request;

class ServicemanController extends Controller
{
    public function serviceman()
    {   
        $servicemans=Serviceman::with('category')->paginate(2);
        return view('pages.serviceman.list', compact('servicemans'));
    }

    public function list()
    {
        $cat=ServiceCategory::all();
        return view('pages.serviceman.form',compact('cat'));
    }

    public function store(Request $request) {

        //dd($request->all());
    Serviceman::create([
    //table column name => input field name
    'name'=>$request->name,
    'address'=>$request->address,
    'contact'=>$request->contact,
    'gender'=>$request->gender,
    'status'=>$request->status,
    'category_id'=>$request->category_id,
    ]);

        return redirect()->route('serviceman.list');
     
    }

    public function view($id){

      $serviceman=Serviceman::find($id);
      return view('pages.serviceman.view',compact('serviceman'));
        }

    public function delete($id){

        Serviceman::find($id)->delete();
        return redirect()->back();
}
}
