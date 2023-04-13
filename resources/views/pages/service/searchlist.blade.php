@extends('website.master')
@section('content')

<div class="row">
          @foreach($service as $data)
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
           
        
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">{{$data->name}}</a></h4>
          

              
            </div>
        
          </div>


         @endforeach

       

       

         

         

        </div>



@endsection