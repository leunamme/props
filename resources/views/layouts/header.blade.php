<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Owner Direct</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">
    <!-- Range Slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/ion.rangeSlider.css">
    <!-- Range Slider  -->
    <link rel="stylesheet" type="text/css" href="assets/css/ion.rangeSlider.skinFlat.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-9 col-xs-12">
              <!-- Start Contact Info -->
              <ul class="links clearfix">
                <li><i class="lni-phone-handset"></i>1-800-555-1234</li>
                  <li><i class="lni-envelope"></i>1-800-555-1234</li>
                <li><a href="#"><i class="lni-map-marker"></i> York Blvd, Los Angeles, US</a></li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-lg-5 col-md-3 col-xs-12">
              <div class="header-top-right float-right">
                  
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="header-top-button">Log In</a>
                    <a href="{{ route('register') }}" class="header-top-button white-bg">Sign Up</a>
                @else
                    <!-- <a href="{{ route('logout') }}" class="header-top-button white-bg">Logout</a> -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="header-top-button white-bg">Logout</button>
                    </form>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white"  data-toggle="sticky-onscroll">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lin-menu"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt=""></a>
          </div>

          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-center">
              <li class="nav-item active">
                <a class="nav-link" href="/">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">
                  Aobut
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">
                  Pricing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
            <div class="search-add float-right">

            </div>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="active" href="/">
            Home
            </a>
          </li>
          <li>
            <a href="contact.html">
            About
            </a>
          </li>
          <li>
            <a href="contact.html">
            Pricing
            </a>
          </li>
          <li>
            <a href="contact.html">
            Contact Us
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->

@yield('head')


            <!-- FOOTER  -->


          <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">About <span>Us</span></h3>
              <ul class="footer-link">
                <li><a href="#">Company</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Documentation</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Usefull<span> Links</span></h3>
              <ul class="footer-link">
                <li><a href="#">Bayonne, New York</a></li>
                <li><a href="#">Greenville, Chicago</a></li>
                <li><a href="#">The Heights, New Jersey</a></li>
                <li><a href="#">Bayonne, Washington DC</a></li>
                <li><a href="#">Greenville, San Francisco</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contact <span>Info</span></h3>
              <ul class="address">
                <li>
                  <a href="#"><i class="lni-map-marker"></i> York Blvd, Los Angeles, US<br> View, CA 94041USA</a>
                </li>
                <li>
                  <a href="#"><i class="lni-phone-handset"></i> (518) 2014-040 43</a>
                </li>
                <li>
                  <a href="#"><i class="lni-envelope"></i> <span class="__cf_email__" data-cfemail="fa929f969695ba9f898e9b8e9f82d4999597">[email&#160;protected]</span></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Subscribe <span>on Our News</span></h3>
              <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                <div class="form-group is-empty">
                  <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
                  <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-envelope"></i></button>
                  <div class="clearfix"></div>
                </div>
              </form>
              <div class="social-icon">
                <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright © 2018 <a rel="nofollow" href="https://uideck.com/">UIdeck</a> All Right Reserved</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/color-switcher.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/ion.rangeSlider.js"></script>
    <script src="assets/js/jquery.parallax.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

  </body>

</html>
