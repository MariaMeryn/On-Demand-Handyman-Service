<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        $bookings=Booking::all();
        return view('pages.booking.list',compact('bookings')); 
    }


public function form(){

    return view('pages.booking.form');
}

public function store(Request $request){
    Booking::create([
    'name'=>$request->name,
    'status'=>$request->status,
    'description'=>$request->description
    ]);

    return redirect()->route('booking.list');
}
}
