<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function list(){

   $payments=Payment::all();
    return view('pages.payment.list',compact('payments'));
   }

   public function form(){

    return view('pages.payment.form');
   }
   
   public function store(Request $request){
   
      Payment::create([
         'type'=>$request->type,
         'types'=>$request->types,
      ]);
         return redirect()->route('payment.list');
   
   }

}
