<!doctype html>
<html lang="en">
  <head>
    <title>Adoption</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Sacramento" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/fontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/fontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/fontend/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('/fontend/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fontend/fonts/fontawesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('/fontend/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('/fontend/css/style.css')}}">
  </head>
  <body>
    
    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-linkedin"></span></a>
            </div>
            <div class="col-6 text-right d-sm-flex d-flex">
              <d class="ml-auto">
                <a href="{{ url('/register') }}" class="btn">Registration</a>
                <a href="{{ url('/login') }}" class="cta-btn">Login</a>
              </d>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Adopted</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adoption</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{url('adoption')}}">Adoption</a>
                  <a class="dropdown-item" href="{{url('how')}}">How to Adopt</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('stories')}}">Success Stories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <!-- content start-->

    @yield('content')

    <!-- content End-->

      <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3 mb-5">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Contact &amp; Address</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-flex"><span class="mr-3">A:</span><span class="text-white">75/1/1, Sukrabad, Dhaka - 1207</span></li>
              <li class="d-flex"><span class="mr-3">T:</span><span class="text-white">+01777 000 0000</span></li>
              <li class="d-flex"><span class="mr-3">E:</span><span class="text-white">ashraful35-1685@diu.edu.bd</span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Success Stories</a></li>
              <li><a href="#">Waiting Children</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>Social</h3>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design and developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/wridoyboss/" target="_blank">Ashraful Islam Wridoy</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset('/fontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/fontend/js/popper.min.js')}}"></script>
    <script src="{{asset('/fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/fontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/fontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('/fontend/js/main.js')}}"></script>
  </body>
</html>

