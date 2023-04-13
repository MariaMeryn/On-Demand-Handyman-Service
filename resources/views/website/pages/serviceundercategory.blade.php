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
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">{{$data->name}}</a></h4>
              <h2><a href="">{{$data->description}}</a></h2>
              <h2><a href="">{{$data->image}}</a></h2>
          

              
            </div>
          </div>

         @endforeach

       

       

         

         

        </div>

      </div>
    </section>
@endsection