@extends('layouts.header')
@section('head')

    <!-- Ueser Section Start -->
    <section class="user-page submit-property section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="notification-box mb-5">
              <h3>Don't Have an Account?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan.</p>
            </div>

            <div class="submit-form">
              <form>
                <h3 class="heading">Basic Information</h3>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Property Title</label>
                      <input type="text" name="property-title" class="form-control" placeholder="Property Title">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Status</label>
                      <select class="classic">
                        <option>For Sale</option>
                        <option>For Rent</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Type</label>
                      <select class="classic">
                        <option>Apartment</option>
                        <option>House</option>
                        <option>Commercial</option>
                        <option>Garage</option>
                        <option>Lot</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="price" class="form-control" placeholder="USD">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                      <label>Area/Location</label>
                      <input type="text" name="price" class="form-control" placeholder="SqFt">
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                      <label>Bedrooms</label>
                      <select class="classic">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                      <label>Bathroom</label>
                      <select class="classic">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </div>
                <h3 class="heading">Property Gallery</h3>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <div id="drop-file" class="drop-file mb-5">
                      <div class="drop-message"><span>Drop files here to upload</span></div>
                    </div>
                  </div>
                </div>
                <h3 class="heading">Location</h3>
                <div class="row mb-3">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>City</label>
                      <select class="classic">
                        <option>Choose City</option>
                        <option>New York</option>
                        <option>Chicago</option>
                        <option>Queens</option>
                        <option>Manhattan</option>
                        <option>San Antonio</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>State</label>
                      <select class="classic">
                        <option>Choose State</option>
                        <option>Alabama</option>
                        <option>California</option>
                        <option>Connecticut</option>
                        <option>Florida</option>
                        <option>Georgia</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Postal Code</label>
                      <input type="text" name="postal-code" class="form-control" placeholder="Postal Code">
                    </div>
                  </div>
                </div>

                <h3 class="heading">Detailed Information</h3>
                <div class="row mb-3">
                  <div class="col-lg-12">
                    <div class="form-group message">
                      <label>Detailed Information</label>
                      <textarea class="form-control" name="message" placeholder="Detailed Information"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Building Age (optional)</label>
                      <select class="classic">
                        <option>0-5 Years</option>
                        <option>0-10 Years</option>
                        <option>0-15 Years</option>
                        <option>0-20 Years</option>
                        <option>0-25 Years</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bedrooms (optional)</label>
                      <select class="classic">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Bathrooms (optional)</label>
                      <select class="classic">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </div>

                <h3 class="heading">Features (optional)</h3>
                <div class="row mb-3">
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="air-condition">
                        <label class="form-check-label" for="air-condition">Air Conditioning</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="free-parking">
                        <label class="form-check-label" for="free-parking">Swimming Pool</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="swimming-pool">
                        <label class="form-check-label" for="swimming-pool">Central Heating</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="laundry-room">
                        <label class="form-check-label" for="laundry-room">Laundry Room</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="window-covering">
                        <label class="form-check-label" for="window-covering">Gym</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="places">
                        <label class="form-check-label" for="places">Window Covering</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="alarm">
                        <label class="form-check-label" for="alarm">Alarm</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="central-heating">
                        <label class="form-check-label" for="central-heating">Central Heating</label>
                      </div>
                    </div>
                  </div>
                </div>
                <h3 class="heading">Contact Details</h3>
                <div class="row">
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" name="name" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-12 mt-3">
                    <a href="#" class="btn btn-common">Preview</a>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Ueser Section End -->

@endsection
