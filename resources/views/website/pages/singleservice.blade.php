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
        <form action="{{route('pay.now')}}" method="post" name="bookingForm">
          @csrf
          <div class="row">
            <div class="form-group">
              <label for="exampleFormControlInput1">Enter Name</label>
              <input name="name" type="string" class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
            </div>

            <input type="hidden" name="total_payment" value="{{$singleservice->price}}">
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
            <div class="form-group my-3">
              <div class="">
                <input name="paymentType" type="radio" class="form-check-input mx-2" id="" value="online" checked><label class="form-check-label" for="" > Online</label>
                <input name="paymentType" type="radio" class="form-check-input mx-2" id="" value="inHand"><label class="form-check-label" for=""> In Hand</label>
              </div>
            </div>

            <input type="hidden" value="{{$singleservice->price}}" name="amount">
          </div>
          <button type="submit" class="btn btn-success my-2">Book Now</button>
        </form>
      </div>

      <div class="col-lg-4">

        <div class="portfolio-info">
          <h3>Service Details</h3>
          <ul>
            <li><strong>Name</strong>:{{$singleservice->name}}</li>
            <li><strong>Price</strong>:{{$singleservice->price}} BDT</li>

          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Service Description</h2>
          <p>
            {{$singleservice->description}}
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

@endsection


@push("js")
<script>
  $(document).ready(function() {
    $('input[type=radio][name=paymentType]').change(function() {
      if (this.value == 'online') {
        const form  = $("form").attr("action","{{route('pay.now')}}")

      } else if (this.value == 'inHand') {
        const form  = $("form").attr("action","{{route('booking.store')}}")
      }
    });
  });
</script>
@endpush