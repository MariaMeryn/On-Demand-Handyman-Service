@extends('website.master')
@section('content')

<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

      
        <div class="row">
     
      @foreach($service as $data)
   
  
      
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <a href="{{route('single.service', $data->id)}}">  
          <div class="icon-box">
              <div class="icon">  <img class="img-fluid w-100" src="{{url('/uploads/'.$data->image)}}" alt=""></div>
              <h4><a href="">{{$data->name}}</a></h4>
             
            
          

              
            </div>
            </a>
</div>
          
       

          
         
          @endforeach
          </div>
         
    
    

          </div>
    </section>
@endsection