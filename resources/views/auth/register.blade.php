<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home | BrittVille - Bootstrap HTML5 Real Estate Website Template</title>

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
  <body style="background-color: #f0f0f0">

    <div class="pd-top">
        <div class="text-center">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.png" alt="">
            </a>
        </div>
    </div>

    <!-- Content section Start -->
    <section id="content" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box" style="background-color: #fff">
              <h3>
                Create Your account
              </h3>


            <!--Form Start  -->
              <form class="login-form" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}

                <!-- // -->
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                  <div class="input-icon">
                    <i class="lni-user"></i>
                    <input id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>
                <!-- // -->

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                  <div class="input-icon">
                    <i class="lni-user"></i>
                    <input id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required>

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>
                <!-- // -->

                <!--//  -->
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                  <div class="input-icon">
                    <i class="lni-phone"></i>
                    <input id="phone" type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>

                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>
                <!-- // -->

                <!-- // -->
                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                  <div class="input-icon">
                    <i class="lni-pin"></i>
                    <input id="state" type="text" class="form-control" placeholder="State " name="state" value="{{ old('state') }}" required>

                    @if ($errors->has('state'))
                        <span class="help-block">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>
                <!-- // -->

                <!-- // -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="input-icon">
                    <i class="lni-envelope"></i>
                    <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>
                <!--//  -->

                <!-- // -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="input-icon">
                    <i class="lni-unlock"></i>
                    <input id="password" type="password" class="form-control" placeholder="Password " name="password" value="{{ old('password') }}" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                  </div>
                </div>
                <!-- // -->

                <!--//  -->
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-unlock"></i>
                    <input id="password-confirm" type="password" placeholder="Confirm Password " class="form-control" name="password_confirmation" required>
                  </div>
                </div>
                <!-- // -->

                <button class="btn btn-common log-btn mt-3" type="submit">Register</button>
                <p class="text-center">Already have an account?<a href="{{ route('login') }}"> Sign In</a></p>
              </form>
        <!-- Form Ending  -->



            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End -->

    <!-- Footer Section Start -->
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

<!-- Mirrored from preview.uideck.com/items/brittville-demo/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jun 2018 17:29:04 GMT -->
</html>
