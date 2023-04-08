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
    'ser_id'=>$request->ser_id,
    'user_id'=>$request->user_id,
    
    ]);

    return redirect()->route('booking.list');
}
public function view($id){

    $booking=Booking::find($id);
    return view('pages.booking.view',compact('booking'));
      }

  public function delete($id){

      Booking::find($id)->delete();
      return redirect()->back();
}


}
