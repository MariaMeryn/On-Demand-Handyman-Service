@extends('website.master')
@section('content')
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->

 

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

      

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
      


          <h4>OUR STORY</h4>
          <p>We are HandyMan </p>
          <small>HandyMan is the leading on-demand professional cleaning and handymen services provider of Bangladesh.</small>
          <small>We provide professional cleaning, handymen, packers & movers, appliance repair and other essential services to the households and workplaces.</small>
          <small>Our Mission is to deliver an amazing service experience to everyone by consistently delighting and empowering people in our community.</small>


         
        </div>

        <div class="row">
        <h1>Check our Services</h1>
          @foreach($service as $data)
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              
              <img src="{{url('/uploads/'.$data->image)}}" width=80 alt="image">
              <h4><a href="">{{$data->name}}</a></h4>
             
          

              
            </div>
          </div>

         @endforeach

       

       

         

         

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    
   

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

       

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Faidabad Kathaltola Uttara Dhaka-1230</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sameryn7@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+880 1634859786</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          <h1>Why HandyMama?</h1>
          <p>Our service providers are highly skilled and best at what they do. All of our service providers are thoroughly verified, 4-steps trained and background check by us. Most importantly, they are extremely customer centric at their heart.</p>
          <h1>No Hassle Booking!</h1>
          <p>We want you to focus on big things in life while we take care of your little things. Just leave your mobile number, we will do the rest for you. Just like that!</p>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  
@endsection