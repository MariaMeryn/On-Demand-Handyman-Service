<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Serviceman;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        $bookings=Booking::all();
        
        return view('pages.booking.list',compact('bookings')); 
    }




public function view($id){

    $booking=Booking::find($id);
    $serviceMan=Serviceman::all();
    return view('pages.booking.view',compact('booking','serviceMan'));
      }

  public function delete($id){

      Booking::find($id)->delete();
      toastr()->success('successfully deleted');
      return redirect()->back();
}

public function assign($id){

    $serviceMan=Serviceman::find($id);

    return redirect()->route('bookingdetails.list' ,compact('serviceMan'));
}


}
