<?php

namespace App\Http\Controllers;

use App\Models\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    public function list(){
        $consumers=Consumer::paginate(4);

        return view('pages.consumer.list',compact('consumers'));
    }

    public function form(){
        return view('pages.consumer.form');
    }

    public function store(Request $request){

    Consumer::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'address'=>$request->address,
        'contact'=>$request->contact
    ]);
              return redirect()->route('consumer.list');
    }

    public function view($id)
    {
        $consumer=Consumer::find($id);
        return view('pages.consumer.view',compact('consumer'));
    }
    
    public function delete($id){
        Consumer::find($id)->delete();
        toastr()->success('successfully deleted');
        return redirect()->back();
        
    }
}
