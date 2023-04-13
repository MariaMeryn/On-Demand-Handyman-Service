<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->



  @include('website.partials.header')


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="background: url({{url('')}})">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h2>Enjoy a better and healthier cleaning experience<span>.</span></h2>
          <h2>Best Helping Hand for You</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        @foreach($category as $data)
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">{{$data->name}}</a></h3>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Hero -->




  <!-- ======= About Section ======= -->
  <main id="main">

    @yield('content')




  </main>
   <!--registration modal-->

  <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{route('user.store')}}" method="post">
          @csrf
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="form-label">Enter Your Name</label>
              <input required type="text" name="name" class="form-control"  placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email address</label>
              <input required type="email" name="email" class="form-control"  placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input required type="password" name="password" class="form-control"  placeholder="Enter your password">
            </div>
         
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

 <!-- ======= login modal ======= -->

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('user.login')}}" method='post' >
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Enter Your email:</label>
                            <input required type="email" name="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="form-group">
                            <label for="">Enter Your password:</label>
                            <input required type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

  <!-- End #main -->

  <!-- ======= Footer ======= -->

  @include('website.partials.footer')

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{url('/vendor/aos/aos.js')}}"></script>
  <script src="{{url('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('js/main.js')}}"></script>

</body>

</html>