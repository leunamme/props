@extends('layouts.header')
@section('head')


    <!-- Intro Section Start -->
    <section id="intro" class="section-intro">
      <div class="search-container">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="intro-sub-heading">Find Your Dream Apartment!</h4>
              <h2>Find Best Properties<br> in One Place</h2>
              <div class="content">
                <form>
                  <div class="row">


                    <div class="col-lg-8 col-md-6 col-xs-12">
                      <div class="search-category-container">
                        <label class="styled-select">
                          <select class="classic">
                            <option>Bedrooms</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                          </select>
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="text-right btn-section">
                          <button type="button" class="btn btn-common"><i class="lni-search"></i> Search</button>
                        </div>
                    </div>

                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro Section End -->


    <!-- Latest Property Start -->
    <section class="latest-property section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <p>Explore</p>
              <h2 class="section-title">Latest Listings</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 wow fadeIn" data-wow-delay="0.8s">
            <div id="latest-property" class="owl-carousel">
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <div class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img class="img-fluid" src="assets/img/property/house-1.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label bg-red">For Sale</span>
                        </div>
                      </div>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
                        <div class="adderess"><i class="lni-map-marker"></i> 96 Bay 10th St, Brooklyn, NY 11228</div>
                        <div class="pricin-list">
                          <div class="property-price">
                            <span>$1,600</span>
                          </div>
                         <p><span>4 bds</span> . <span>4 ba</span> . <span>2500 Sqft</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <div class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img class="img-fluid" src="assets/img/property/house-2.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label">For Rent</span>
                        </div>
                      </div>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Family Condo</a></h3>
                        <div class="adderess"><i class="lni-map-marker"></i> Louis, Missouri, US</div>
                        <div class="pricin-list">
                          <div class="property-price">
                            <span>$1,700</span>
                          </div>
                          <p><span>8 bds</span> . <span>8 ba</span> . <span>2900 Sqft</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <div class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img class="img-fluid" src="assets/img/property/house-3.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label bg-yellow">New</span>
                        </div>
                      </div>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Guaranteed modern home</a></h3>
                        <div class="adderess"><i class="lni-map-marker"></i> Avenue C, New York, US</div>
                        <div class="pricin-list">
                          <div class="property-price">
                            <span>$1,750</span>
                          </div>
                          <p><span>5 bds</span> . <span>6 ba</span> . <span>2700 Sqft</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <div class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img class="img-fluid" src="assets/img/property/house-4.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label">For Rent</span>
                        </div>
                      </div>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Family home for sale</a></h3>
                        <div class="adderess"><i class="lni-map-marker"></i> Sacramento, Chicago, US</div>
                        <div class="pricin-list">
                          <div class="property-price">
                            <span>$1,400</span>
                          </div>
                          <p><span>2 bds</span> . <span>2 ba</span> . <span>2200 Sqft</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <div class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img class="img-fluid" src="assets/img/property/house-5.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label bg-yellow">New</span>
                        </div>
                      </div>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Amazing oceanfront apartment</a></h3>
                        <div class="adderess"><i class="lni-map-marker"></i> 53 W 88th St, Dallas, US</div>
                        <div class="pricin-list">
                          <div class="property-price">
                            <span>$1,750</span>
                          </div>
                          <p><span>6 bds</span> . <span>6 ba</span> . <span>2700 Sqft</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property-main">
                  <div class="property-wrap">
                    <div class="property-item">
                      <div class="item-thumb">
                        <a class="hover-effect" href="property.html">
                          <img class="img-fluid" src="assets/img/property/house-6.jpg" alt="">
                        </a>
                        <div class="label-inner">
                          <span class="label-status label bg-red">For Sale</span>
                        </div>
                      </div>
                      <div class="item-body">
                        <h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
                        <div class="adderess"><i class="lni-map-marker"></i> 365 Webber Street, Washington</div>
                        <div class="pricin-list">
                          <div class="property-price">
                            <span>$1,800</span>
                          </div>
                         <p><span>5 bds</span> . <span>7 ba</span> . <span>2800 Sqft</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Property End -->


    <!-- Services Section Start -->
    <section class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <p>Discover</p>
              <h2 class="section-title">Common Features</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-apartment"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Full Furnished</a></h3>
                <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-crown"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Royal Touch Paint</a></h3>
                <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Letest Interior Design</a></h3>
                <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lni-bolt-alt"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Non Stop Security</a></h3>
                <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1s">
              <div class="icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Living Inside a Nature</a></h3>
                <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-medall"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Luxurious Fittings</a></h3>
                <p>Lorem must explain to you how all this mistaolt dete denouncing pleasure and pralsing plan wasnad</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Testimonial Section Start -->
    <section style="background-color: white;" class="testimonial section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Michael Papirov</a></h2>
                    <h4><a href="#">Customer</a></h4>
                  </div>
                </div>
              </div>
             <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img2.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Josh Rossi</a></h2>
                    <h4><a href="#">Manager</a></h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img3.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Daniel Greem</a></h2>
                    <h4><a href="#">Customer</a></h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img4.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">John Doe</a></h2>
                    <h4><a href="#">Manager</a></h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                  </div>
                </div>
                <div class="client-info">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img5.png" alt="">
                  </div>
                  <div class="info-text">
                    <h2><a href="#">Michael Papirov</a></h2>
                    <h4><a href="#">Customer</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Client Logo Section Start -->
    <section id="clients-logo" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-xs-12">
            <div class="client-logo">
              <a href="#"><img class="img-fluid" src="assets/img/clients/img1.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12">
            <div class="client-logo">
              <a href="#"><img class="img-fluid" src="assets/img/clients/img2.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12">
            <div class="client-logo">
              <a href="#"><img class="img-fluid" src="assets/img/clients/img3.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12">
            <div class="client-logo">
              <a href="#"><img class="img-fluid" src="assets/img/clients/img4.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12">
            <div class="client-logo">
              <a href="#"><img class="img-fluid" src="assets/img/clients/img5.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12">
            <div class="client-logo">
              <a href="#"><img class="img-fluid" src="assets/img/clients/img6.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Cleint Logo Section End -->


@endsection
