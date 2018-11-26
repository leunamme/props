@extends('layouts.header')
@section('head')

    <!-- Page Banner Start -->
    <!-- <div id="page-banner-area" class="page-banner">
      <div class="page-banner-title">
        <div class="text-center">
          <h2>Properties</h2>
          <a href="#"><i class="lni-home"></i> Home</a>
          <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
          <span class="current">Standard Detail</span>
        </div>
      </div>
    </div> -->
    <!-- Page Banner End -->

    <!-- Start Content -->
    <div id="content" class="section-padding">
      <div class="container">
        <div class="property-details">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-xs-12">
              <div class="info">
                <h3>Luxury Apartment <span class="badge">sale</span></h3>
                <p class="room-type">Living Room</p>
                <p class="address"><i class="lni-map-marker"></i> York Blvd, Los Angeles, US View, CA 94041USA</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12">
              <div class="details">
                <div class="details-listing">
                  <p>Bedrooms</p>
                  <h5>05</h5>
                </div>
                <div class="details-listing">
                  <p>Washrooms</p>
                  <h5>06</h5>
                </div>
                <div class="details-listing">
                  <p>Size (Sq.ft)</p>
                  <h5>1650</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12">
              <div class="others">
                <ul>
                  <li><span>$22,500.00</span></li>
                  <!-- <li><a href="#"><i class="lni-bookmark-alt"></i></a></li>
                  <li><a href="#"><i class="lni-heart"></i></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Product Info Start -->
          <div class="col-lg-8 col-md-12 col-xs-12">
              <div class="property-slider">
                <div id="property-slider" class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets/img/productinfo/img1.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="assets/img/productinfo/img2.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="assets/img/productinfo/img3.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="inner-box property-dsc">
                <h2 class="desc-title">Property Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci. </p>
                <p>Duis non tincidunt dui. Sed vehicula, libero at eleifend accumsan, lectus massa mollis metus, a malesuada velit orci nec elit Suspendisse nisl mauris, rhoncus quis faucibus vitae, commodo vitae neque. Nullam vulputate feugiat diam, id tempor neque hendreit quis. Curabitur ut felis ultrices, pellentesque augue ac, bibendum lorem. Curabitur non volutpat augue. Aliquam malesuada scelerisque tortor eget mollis. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nisi sequi quo laborum eveniet illum ex doloremque porro repellat. Saepe sed atque eos inventore facilis officiis dolorum, incidunt optio iure! Itaque libero et vel labore voluptatem natus nulla, sunt quaerat velit officia! Ipsum fuga magni, sapiente reprehenderit dolores eaque excepturi facilis, praesentium.</p>
              </div>

              <div class="inner-box featured">
                <h2 class="desc-title">Details</h2>
                <ul class="property-features">
                  <li>Building Age: <span>2 Years</span></li>
                  <li>Parking: <span>Attached Garage</span></li>
                  <li>Cooling: <span>Central Cooling</span></li>
                  <li>Heating: <span>Forced Air, Gas</span></li>
                  <li>Sewer: <span>Public/City</span></li>
                  <li>Water: <span>City</span></li>
                  <li>Exercise Room: <span>Yes</span></li>
                  <li>Storage Room: <span>Yes</span></li>
                </ul>
              </div>

              <div class="inner-box featured">
                <h2 class="desc-title">Features</h2>
                <ul class="property-features checkboxes">
                  <li><i class="lni-check-box"></i> Air Conditioning</li>
                  <li><i class="lni-check-box"></i> Central Heating</li>
                  <li><i class="lni-check-box"></i> Laundry Room</li>
                  <li><i class="lni-check-box"></i> Window Covering</li>
                  <li><i class="lni-check-box"></i> Swimming Pool</li>
                  <li><i class="lni-check-box"></i> Central Heating</li>
                  <li><i class="lni-check-box"></i> Gym</li>
                  <li><i class="lni-check-box"></i> Internet</li>
                  <li><i class="lni-check-box"></i> Alarm</li>
                </ul>
              </div>



              <div class="inner-box location-map">
                <h2 class="desc-title">Location On Map</h2>
                <div id="conatiner-map"></div>
              </div>

            </div>

            <!--Sidebar-->
            <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
              <!-- Widget -->
              <div class="widget mb2">
                <button class="widget-button"><i class="lni-printer"></i></button>
                <button class="widget-button "><i class="lni-star"></i></button>
                <button class="widget-button"><i class="lni-zip"></i></button>
                <div class="clearfix"></div>
              </div>

              <!-- Property Agent Widget -->
              <div class="widget mt3">
                <div class="agent-inner">
                  <div class="agent-title">
                    <div class="agent-photo">
                      <a href="#"><img src="assets/img/productinfo/agent.jpg" alt=""></a>
                    </div>
                    <div class="agent-details">
                      <h3><a href="#">Simon Heqburn</a></h3>
                      <span><i class="lni-phone-handset"></i>(123) 123-456</span>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Your Email">
                  <input type="text" class="form-control" placeholder="Your Phone">
                  <p>I'm interested in this property [ID 123456] and I'd like to know more details.</p>
                  <button class="btn btn-common fullwidth mt-4">Send Message</button>
                </div>
              </div>

              <!-- Property Featured Widget -->
              <div class="widget mt3">
                <h3 class="sidebar-title">Featured Properties</h3>
                <div id="listing-carousel" class="owl-carousel">
                  <div class="item">
                    <div class="listing-item">
                      <a href="#" class="listing-img-container">
                        <img src="assets/img/productinfo/listing1.jpg" alt="">
                        <div class="listing-badges">
                          <span class="featured">Featured</span>
                          <span>For Sale</span>
                        </div>
                        <div class="listing-content">
                          <span class="listing-title">Eagle Apartments <i>$275,000</i></span>
                          <ul class="listing-content">
                            <li>Area <span>530 sq ft</span></li>
                            <li>Rooms <span>3</span></li>
                            <li>Beds <span>1</span></li>
                            <li>Baths <span>1</span></li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="listing-item">
                      <a href="#" class="listing-img-container">
                        <img src="assets/img/productinfo/listing2.jpg" alt="">
                        <div class="listing-badges">
                          <span class="featured">Featured</span>
                          <span>For Sale</span>
                        </div>
                        <div class="listing-content">
                          <span class="listing-title">Eagle Apartments <i>$275,000</i></span>
                          <ul class="listing-content">
                            <li>Area <span>530 sq ft</span></li>
                            <li>Rooms <span>3</span></li>
                            <li>Beds <span>1</span></li>
                            <li>Baths <span>1</span></li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="listing-item">
                      <a href="#" class="listing-img-container">
                        <img src="assets/img/productinfo/listing3.jpg" alt="">
                        <div class="listing-badges">
                          <span class="featured">Featured</span>
                          <span>For Sale</span>
                        </div>
                        <div class="listing-content">
                          <span class="listing-title">Eagle Apartments <i>$275,000</i></span>
                          <ul class="listing-content">
                            <li>Area <span>530 sq ft</span></li>
                            <li>Rooms <span>3</span></li>
                            <li>Beds <span>1</span></li>
                            <li>Baths <span>1</span></li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              

            </aside>
            <!--End sidebar-->
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="desc-title">Similar Properties</h2>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
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
                    <div class="adderess"><i class="lni-map-marker"></i> Drive Street, Los Angeles, US</div>
                    <div class="pricin-list">
                      <div class="property-price">
                        <span>$1,500</span>
                      </div>
                     <p><span>4 bds</span> . <span>4 ba</span> . <span>2500 Sqft</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
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
                        <span>$27,00</span>
                      </div>
                     <p><span>6 bds</span> . <span>8 ba</span> . <span>2600 Sqft</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
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
                     <p><span>8 bds</span> . <span>8 ba</span> . <span>3000 Sqft</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End Content -->

@endsection
