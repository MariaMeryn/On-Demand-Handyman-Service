@extends('website.master')
@section('content')


   <!-- ======= Portfolio Details Section ======= -->
   <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
 



          <div class="col-lg-8">
   

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div cswlass="iper-slide">
                   
                <img class="img-fluid w-50" src="{{url('/uploads/'.$singleservice->image)}}" alt="">
                </div>

 

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-md-6">
<form action="{{route('booking.store')}}" method="post">
            @csrf
            <div class="row">
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Name</label>
    <input name="name" type="string" class="form-control"  id="exampleFormControlInput1" placeholder="Enter name">
  </div>

  <input type="hidden" value="{{$singleservice->id}}" name="service_id">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email</label>
    <input name="email" type="string" class="form-control" id="exampleFormControlSelect1">
  
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2">Address</label>
   <textarea name="address" id="" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">contact</label>
    <input name="contact" type="string" class="form-control" id="exampleFormControlSelect1">
  
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Date</label>
    <input name="date" type="date" class="form-control" id="exampleFormControlSelect1">
  
  </div>

  
  </div>


<button type="submit" class="btn btn-success my-2" >Book Now</button>
</form>
</div>

          <div class="col-lg-4">

            <div class="portfolio-info">
              <h3>Service Details</h3>
              <ul>
                <li><strong>Name</strong>:{{$singleservice->name}}</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                {{$singleservice->description}}
                </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection