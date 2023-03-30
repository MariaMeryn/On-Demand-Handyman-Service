<?php

namespace App\Http\Controllers;

use App\Models\BookingDetails;
use Illuminate\Http\Request;

class BookingDetailsController extends Controller
{
    public function list(){

        $bookingdetails=BookingDetails::all();
        return view('pages.bookingdetails.list',compact('bookingdetails'));
    }

    public function form(){

        return view('pages.bookingdetails.form');
    }

    public function store(Request $request){
        BookingDetails::create([
            'name'=>$request->name,
            'address'=>$request->address
        ]);
        return redirect()->back();

    }
}
