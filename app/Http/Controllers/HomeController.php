<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Serviceman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home()
    {
        
        return view('partials.master');
    }

    public function dashboard()
    {  
        
        $servicemans=Serviceman::all()->count();
        $cat=ServiceCategory::all()->count();
        $sers=Service::all()->count();
        $booking=Booking::all()->count();
        return view('pages.dashboard',compact('servicemans','cat','sers','booking'));
    }

    public function login(){

        return view('pages.login');
    }

    public function dologin(Request $request)
    {
      $validate=Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required|min:5',

      ]);
      
      if($validate->fails())
      {
          notify()->error($validate->getMessageBag());
          return redirect()->back();
      }

      $credentials=$request->only(['email','password']);
      if(auth()->attempt($credentials)){
          toastr()->success('Login Success');
          return redirect()->route('home');
      }
      toastr()->error('Invalid Credential');
          return redirect()->back();

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    }