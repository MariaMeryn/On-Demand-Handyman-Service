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
            'booking_id'=>$request->booking_id,
            'service_id'=>$request->service_id,
            'serviceman_id'=>$request->serviceman_id,
            'description'=>$request->description
        ]);
        
        return redirect()->route('bookingdetails.list');

    }

    public function view($id){

        $bookdetails=BookingDetails::find($id);
        return view('pages.bookingdetails.view',compact('bookdetails'));
          }
  
      public function delete($id){
  
          BookingDetails::find($id)->delete();
          toastr()->success('successfully deleted');
          return redirect()->back();
  }
}
