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
            <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
            <h4>Real Estate Agent</h4>
            <img src="assets/img/avatar/avatar-2.jpg" alt="avatar" class="img-fluid profile-img">
          </div>
          <!-- Detail -->
          <div class="detail clearfix">
            <ul>
              <li>
                <a class="active" href="dashboard.html" >
                  <i class="lni-files"></i> Dashboard
                </a>
              </li>
              <li>
                <a href="user-profile.html" >
                  <i class="lni-user"></i>Profile
                </a>
              </li>
              <li>
                <a href="/my-properties">
                  <i class="lni-home"></i>My Properties
                </a>
              </li>
              <li>
                <a href="favorited-properties.html">
                  <i class="lni-heart"></i>Favorited Properties
                </a>
              </li>
              <li>
                <a href="/submit-property">
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
        <div class="dashborad-box">
          <h4 class="title">Manage Dashboard</h4>
          <div class="section-body">
            <div class="row">
              <div class="col-sm-4">
                <div class="item">
                  <div class="icon">
                    <span class="lni-map-marker"></span>
                  </div>
                  <div class="info">
                    <h6 class="number">12</h6>
                    <p class="type">Listing</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="item">
                  <div class="icon">
                    <span class="lni-thumbs-up"></span>
                  </div>
                  <div class="info">
                    <h6 class="number">30</h6>
                    <p class="type">Review</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="item">
                  <div class="icon">
                    <span class="lni-comments"></span>
                  </div>
                  <div class="info">
                    <h6 class="number">18</h6>
                    <p class="type">Messages</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashborad-box">
          <h4 class="title">Listing</h4>
          <div class="section-body listing-table">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Listing Name</th>
                    <th>Date</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Amazing oceanfront apartment</td>
                    <td>17 May 2018</td>
                    <td class="rating"><span>4.3</span></td>
                    <td class="status"><span class=" active">Active</span></td>
                    <td class="edit"><a href="#"><span class="lni-pencil"></span></a></td>
                  </tr>
                  <tr>
                    <td>Red Blue Restaurant</td>
                    <td>17 May 2018</td>
                    <td class="rating"><span>4.3</span></td>
                    <td class="status"><span class="active">Active</span></td>
                    <td class="edit"><a href="#"><span class="lni-pencil"></span></a></td>
                  </tr>
                  <tr>
                    <td>Amazing oceanfront apartment</td>
                    <td>12 June 2018</td>
                    <td class="rating"><span>4.3</span></td>
                    <td class="status"><span class="non-active">Non-Active</span></td>
                    <td class="edit"><a href="#"><span class="lni-pencil"></span></a></td>
                  </tr>
                  <tr>
                    <td>Luxury home for sale</td>
                    <td>31 Aug 2018</td>
                    <td class="rating"><span>4.3</span></td>
                    <td class="status"><span class="active">Active</span></td>
                    <td class="edit"><a href="#"><span class="lni-pencil"></span></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="dashborad-box">
          <h4 class="title">Message</h4>
          <div class="section-body">
            <div class="messages">
              <div class="message">
                <div class="thumb">
                  <img class="img-fluid" src="assets/img/dashboard/thumb-1.jpg" alt="">
                </div>
                <div class="body">
                  <h6>David Givens <span class="badge">Unread</span></h6>
                  <p class="post-time">3 Minutes ago</p>
                  <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                  <div class="controller">
                    <ul>
                      <li><a href="#"><i class="lni-eye"></i></a></li>
                      <li><a href="#"><i class="lni-trash"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="message">
                <div class="thumb">
                  <img class="img-fluid" src="assets/img/dashboard/thumb-2.jpg" alt="">
                </div>
                <div class="body">
                  <h6>Darrell S.Allen</h6>
                  <p class="post-time">19 Minutes ago</p>
                  <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                  <div class="controller">
                    <ul>
                      <li><a href="#"><i class="lni-eye"></i></a></li>
                      <li><a href="#"><i class="lni-trash"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashborad-box">
          <h4 class="title">Review</h4>
          <div class="section-body">
            <div class="reviews">
              <div class="review">
                <div class="thumb">
                  <img class="img-fluid" src="assets/img/dashboard/thumb-1.jpg" alt="">
                </div>
                <div class="body">
                  <h6>John Doe
                    <span class="stars">
                      <i class="lni-star-filled"></i>
                      <i class="lni-star-filled"></i>
                      <i class="lni-star-filled"></i>
                      <i class="lni-star"></i>
                      <i class="lni-star"></i>
                    </span>
                  </h6>
                  <p class="post-time">5 hours ago</p>
                  <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                  <div class="controller">
                    <ul>
                      <li><a href="#"><i class="lni-check-box"></i></a></li>
                      <li><a href="#"><i class="lni-pencil-alt"></i></a></li>
                      <li><a href="#"><i class="lni-reply"></i></a></li>
                      <li><a href="#"><i class="lni-trash"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="review">
                <div class="thumb">
                  <img class="img-fluid" src="assets/img/dashboard/thumb-2.jpg" alt="">
                </div>
                <div class="body">
                  <h6>Charli Maria
                    <span class="stars">
                      <i class="lni-star-filled"></i>
                      <i class="lni-star-filled"></i>
                      <i class="lni-star"></i>
                      <i class="lni-star"></i>
                    </span>
                  </h6>
                  <p class="post-time">39 Minutes ago</p>
                  <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                  <div class="controller">
                    <ul>
                      <li><a href="#"><i class="lni-check-box"></i></a></li>
                      <li><a href="#"><i class="lni-pencil-alt"></i></a></li>
                      <li><a href="#"><i class="lni-reply"></i></a></li>
                      <li><a href="#"><i class="lni-trash"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dashborad-box">
          <h3 class="heading">Personal Information</h3>
          <div class="section-inforamation">
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your First name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Last name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" placeholder="Ex: example@domain.com">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" placeholder="Ex: +1-0000-0000-00">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="Write your address here"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>About Yourself</label>
                    <textarea name="address" class="form-control" placeholder="Write about userself"></textarea>
                  </div>
                </div>
              </div>
              <div class="password-section">
                <h6>Update Password</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label >New Password</label>
                      <input type="password" class="form-control" placeholder="Write new password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" class="form-control" placeholder="Write same password again">
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-common">Submit</button>
            </form>
          </div>
        </div>
      </div>
      </div>
  </div>
  </section>
<!-- Ueser Section End -->


@endsection
