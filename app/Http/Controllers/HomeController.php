<?php

namespace App\Http\Controllers;
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
        return view('pages.dashboard');
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
          notify()->success('Login Success');
          return redirect()->route('home');
      }
          notify()->error('Invalid Credentials');
          return redirect()->back();

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    }