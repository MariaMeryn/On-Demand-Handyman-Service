<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\Serviceman;
use Illuminate\Http\Request;

class ServicemanController extends Controller
{
    public function list()
    {   
        $servicemans=Serviceman::with('category')->paginate(2);
        return view('pages.serviceman.list', compact('servicemans'));
    }

    public function form()
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
        toastr()->success('successfully deleted');
        return redirect()->back();
}

public function edit($id){
    $serviceman=Serviceman::find($id);
    $cat=ServiceCategory::all();
    return view('pages.serviceman.edit',compact('serviceman','cat'));
}

public function update(Request $request,$id){
    $serviceman=Serviceman::find($id);
    $serviceman->update([
        'name'=>$request->name,
        'address'=>$request->address,
        'contact'=>$request->contact,
        'gender'=>$request->gender,
        'status'=>$request->status,
        'category_id'=>$request->category_id,
    ]);
    toastr()->success('Update successfully');
    return redirect()->route('serviceman.list');
}
}
