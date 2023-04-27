<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h4 class="logo me-auto me-lg-0"><a href="index.html">Handyman service</a></h4>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="{{route('team')}}">Team</a></li>
        <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
          <ul>

            @foreach($category as $data)
            <a href="{{route('service.under.category',$data->id)}}">{{$data->name}}</a>
            @endforeach
          </ul>
        </li>
        <li><a class="nav-link scrollto"  data-bs-toggle="modal" data-bs-target="#registration">Registration</a></li>
        <li><a class="nav-link scrollto"  data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>

        @auth
                               
        <a href="{{route('user.logout')}}" class="nav-link scrollto">Logout</a>
        @endauth
      </ul>

      <i class="bi bi-list mobile-nav-toggle"></i>


    </nav><!-- .navbar -->
    <nav>

      <form action="{{route('servicesearch')}}" class="form-inline">
        <div class="d-flex ms-5">
        <input name='search_key' value="{{request()->search_key}}" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg></button>
        </div>
      </form>

    </nav>


  </div>

 
  