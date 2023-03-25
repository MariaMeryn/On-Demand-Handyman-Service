<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list()
    {

        $reports=Report::all();
        return view('pages.report.list',compact('reports'));
    }

    public function form(){
        return view('pages.report.form');
    }

    public function store(Request $request){
        Report::create([
            'name'=>$request->name,
            'status'=>$request->status,
            'address'=>$request->address,
            'password'=>$request->password

        ]);

        return redirect()->route('report.list');

    }
}
