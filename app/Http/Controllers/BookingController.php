<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Serviceman;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        $bookings=Booking::with('serviceman')->get();
     
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

public function bookingupdate(Request $request,$id){

   // dd($request->all());
   
   $booking=Booking::find($id);
   $booking->update([
        // 'name'=>$request->name,
        // 'email'=>$request->email,
        // 'address'=>$request->address,
        // 'contact'=>$request->contact,
        // 'date'=>$request->date,
        // 'ser_id'=>$request->service_id,
        'serviceman_id'=>$request->serviceman_id
    
        ]);
        $serviceman=Serviceman::find($id);
        toastr()->success('Assigned seccessful');
        return redirect()->route('booking.list',compact('serviceman'));
    }

    public function edit($id){
        $booking=Booking::find($id);
        $serviceMan=Serviceman::all();
        return view('pages.booking.edit',compact('booking','serviceMan'));


    }

    public function updated(Request $request,$id){
        $serviceMan=Serviceman::all();
        dd($request->all());
         
   $booking=Booking::find($id);
   $booking->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'contact'=>$request->contact,
        'date'=>$request->date,
        'ser_id'=>$request->service_id,
        'serviceman_id'=>$request->serviceman_id
    
        ]);
        $serviceman=Serviceman::find($id);
        toastr()->success('updated seccessful');
        return redirect()->route('booking.list',compact('serviceman'));

    }
}

