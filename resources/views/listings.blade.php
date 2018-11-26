@extends('layouts.header')
@section('head')

    <!-- Page Banner Start -->
    <!-- <div id="page-banner-area" class="page-banner">
      <div class="page-banner-title">
        <div class="text-center">
          <h2>Listing</h2>
          <a href="#"><i class="lni-home"></i> Home</a>
          <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
          <span class="current">Listing</span>
        </div>
      </div>
    </div> -->
    <!-- Page Banner End -->

    <!-- Main container Start -->
    <div class="main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <!-- Product Filter Start -->
            <div class="product-filter">
              <!-- Sort by -->
              <div class="sort-by">
                <span>Sort by:</span>
                <div class="sort-by-select">
                  <select class="classic">
                    <option>Default Order</option>
                    <option>Price Low to High</option>
                    <option>Price High to Low</option>
                    <option>Newest Properties</option>
                    <option>Oldest Properties</option>
                  </select>
                </div>
              </div>
              <!-- Layout Switcher -->
              <div class="layout-switcher">
                <a href="#" class="list active">
                  <i class="lni-menu"></i>
                </a>
                <a href="#" class="grid">
                  <i class="lni-grid"></i>
                </a>
              </div>
              <p class="text-left">42 homes found</p>
            </div>
            <!-- Product Filter End -->

            <!-- Listings Star -->
            <div class="listing-container list-layout">
              <div class="property-main">
                <div class="property-wrap">
                  <div class="property-item">
                    <div class="item-thumb">
                      <a class="hover-effect" href="/property">
                        <img class="img-fluid" src="assets/img/property/house-1.jpg" alt="">
                      </a>
                      <div class="label-inner">
                        <span class="label-status label bg-red">For Sale</span>
                      </div>
                    </div>
                    <div class="item-body">
                      <h3 class="property-title"><a href="/property">Amazing oceanfront apartment</a></h3>
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
            <!-- Listings End -->

            <div class="pagination-container">
              <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <!-- Sidebar Start -->
            <div class="sidebar sticky right">
              <!-- Widget -->
              <div class="widget">
                <h3 class="sidebar-title">Find New Home</h3>
                <div class="row with-forms">
                  <div class="col-md-12">
                    <select class="classic">
                      <option>Any Status</option>
                      <option>For Sale</option>
                      <option>For Rent</option>
                    </select>
                  </div>
                </div>

                <!-- More Search Options  End -->
                <button class="fullwidth btn btn-common">Search</button>
              </div>
              <!-- Widget End -->
            </div>
            <!-- Sidebar End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Main container End -->

@endsection
