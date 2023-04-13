<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Serviceman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class WebsiteController extends Controller
{
    public function web(){
        $service=Service::all();
        $category=ServiceCategory::all();
        $serviceman=Serviceman::all();

        return view('website.pages.home',compact('service','category','serviceman'));
    }

    public function servicesearch(Request $request){
        $service=Service::where('name','LIKE','%'.$request->search_key.'%')->get();
        return view('pages.service.searchlist',compact('service'));
    }
    public function serviceundercategory($id){
       
       
        $service=Service::where('cat_id','=',$id)->get();
        
          return view('website.pages.serviceundercategory',compact('service'));
        }




    public function userstore(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
           
         ]);
   
         if($validate->fails())
         {
             toastr()->error($validate->getMessageBag());
             return redirect()->back();
         }
   
         User::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>bcrypt($request->password),
             'type'=>'consumer',
            
         ]);
   
         toastr()->success('Registration success.');
         return redirect()->back();
    }

            public function userlogin(Request $request)
    {
        $validate=Validator::make($request->all(),[
           'email'=>'required',
           'password'=>'required',
        ]);

        if($validate->fails())
        {
            toastr()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
       if(auth()->attempt($credentials))
       {
           toastr()->success('Login success');
           return redirect()->back();
       }
        toastr()->error('Login failed');
        return redirect()->back();
    }


    public function team(){
        $serviceman=Serviceman::all();

        return view('pages.serviceman.team',compact('serviceman'));
    }
        }
