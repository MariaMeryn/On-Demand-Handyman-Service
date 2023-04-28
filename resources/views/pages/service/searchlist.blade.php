@extends('website.master')
@section('content')


<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        
        </div>

        <div class="row">
          @foreach($service as $data)
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              
              <h1><a href="">{{$data->name}}</a></h1>
              <h4><a href="">{{$data->description}}</a></h4>
              </div>
          </div>

         @endforeach
         </div>

</div>
</section>



@endsection