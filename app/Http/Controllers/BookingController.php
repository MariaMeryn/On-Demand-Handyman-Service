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




public function view($id){

    $booking=Booking::find($id);
    return view('pages.booking.view',compact('booking'));
      }

  public function delete($id){

      Booking::find($id)->delete();
      toastr()->success('successfully deleted');
      return redirect()->back();
}


}
