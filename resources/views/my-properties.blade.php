@extends('layouts.header')
@section('head')

    <!-- Ueser Section Start -->
    <section class="user-page section-padding">
	    <div class="container">
        <div class="row">
	        <div class="col-lg-4 col-md-5 col-xs-12">
            <div class="user-profile-box">
              <!--header -->
              <div class="header clearfix">
                <h2>Justyna Michallek</h2>
                <h4>Real Estate Agent</h4>
                <img src="assets/img/avatar/avatar-2.jpg" alt="avatar" class="img-fluid profile-img">
              </div>
              <!-- Detail -->
              <div class="detail clearfix">
                <ul>
                  <li>
                    <a href="dashboard.html" >
                      <i class="lni-files"></i> Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="user-profile.html" >
                      <i class="lni-user"></i>Profile
                    </a>
                  </li>
                  <li>
                    <a class="active" href="my-properties.html">
                      <i class="lni-home"></i>My Properties
                    </a>
                  </li>
                  <li>
                    <a href="favorited-properties.html">
                      <i class="lni-heart"></i>Favorited Properties
                    </a>
                  </li>
                  <li>
                    <a href="submit-property.html">
                      <i class="lni-plus"></i>Submit New Property
                    </a>
                  </li>
                  <li>
                    <a href="change-password.html">
                      <i class="lni-lock"></i>Change Password
                    </a>
                  </li>
                  <li>
                    <a href="index.html">
                      <i class="lni-logout"></i>Log Out
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-7 col-xs-12">
            <div class="my-properties">
              <table class="table-responsive">
                <thead>
                  <tr>
                    <th>Property</th>
                    <th></th>
                    <th>Date Added</th>
                    <th>Views</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="image">
                      <a href="property.html"><img alt="my-properties-3" src="assets/img/property/house-1.jpg" class="img-fluid"></a>
                    </td>
                    <td>
                      <div class="inner">
                        <a href="property.html"><h2>Modern Family Home</h2></a>
                        <figure><i class="lni-map-marker"></i> York Blvd, Los Angeles, US</figure>
                        <div class="tag price">$ 27,000</div>
                      </div>
                    </td>
                    <td>14.02.2018</td>
                    <td>421</td>
                    <td class="actions">
                      <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                      <a href="#"><i class="delete lni-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="image">
                      <a href="property.html"><img alt="my-properties" src="assets/img/property/house-2.jpg"></a>
                    </td>
                    <td>
                      <div class="inner">
                        <a href="property.html"><h2>Beautiful Single Home</h2></a>
                        <figure><i class="lni-map-marker"></i> York Blvd, Los Angeles, US</figure>
                        <div class="tag price">$ 315,000</div>
                      </div>
                    </td>
                    <td>4.01.2018</td>
                    <td>266</td>
                    <td class="actions">
                      <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                      <a href="#"><i class="delete lni-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
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
          </div>
	      </div>
	    </div>
	  </section>
    <!-- Ueser Section End -->


@endsection
