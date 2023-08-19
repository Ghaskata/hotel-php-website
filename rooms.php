<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>TJ Hotel - ROOMS</title>
</head>
<body class="bg-light">


<!-- navbar -->
<?php
  require('./inc/header.php');
?>
<!-- navbar end -->


<div class="my-5 mx-4">
  <h1 class="text-center h-font">OUR ROOMS</h1>
  <div class="h-line bg-dark mb-4"></div>
</div>

<!-- Our rooms -->
<!-- <div class="container-fluid px-lg-5">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2">FILTERS</h4>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#fillterSection" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column align-items-stretch mt-3" id="fillterSection">
            <div class="border p-3 rounded bg-light mb-3">
              <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                <label for="check-in" class="form-lable mb-2">Check-In</label>
                <input type="date" class="form-control shadow-none mb-4" name="check-in" id="check-in">

                <label for="check-out" class="form-lable mb-2">Check-Out</label>
                <input type="date" class="form-control shadow-none" name="check-out" id="check-out">
            </div>

            <div class="border p-3 rounded bg-light mb-3">
              <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                <div class="mt-2">
                  <input type="checkbox" name="f1" id="f1" class="form-check-input shadow-none me-2">
                  <label for="f1" class="form-check-lable">Facility One</label>
                </div>
                <div class="mt-2">
                  <input type="checkbox" name="f2" id="f2" class="form-check-input shadow-none me-2">
                  <label for="f2" class="form-check-lable">Facility Two</label>
                </div>
                <div class="mt-2">
                  <input type="checkbox" name="f3" id="f3" class="form-check-input shadow-none me-2">
                  <label for="f3" class="form-check-lable">Facility Three</label>
                </div>
            </div> 
            
            <div class="border p-3 rounded bg-light mb-3">
              <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class="me-3">
                    <label for="adults" class="form-lable">Adults</label>
                    <input type="number" min=0 class="form-control shadow-none mb-4" name="adults" id="adults">  
                  </div>
                  <div>
                    <label for="child" class="form-lable">Childrens</label>
                    <input type="number" min=0 class="form-control shadow-none mb-4" name="child" id="child">  
                  </div>
                  </div>
            </div> 
          </div>
        </div>
      </nav>
    </div>

    <div class="col-lg-9 col-md-12 px-4">
      <div class="row">
        <div class="col-lg-4 col-md-6"> 
          <div class="card shadow-lg" style="max-width:350px;">
            <img src="images\rooms\r1.jpg" class="card-img-top ">
            <div class="card-body">
              <h5 class="card-title mb-3">Standard Rooms</h5>
              <h6 class="mb-4"> ₹ 500 per night </h6> 
              <p class="card-text">Perfect for the single person and for couple.A standard room can accommodate up to two guests.
                    The room may also have a small sitting area, such as a sofa or an armchair.</p>
              <div class="mb-4">
                <h6 class="mb-1">Rating</h6>
                <span>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-3">
                <a href="#" class="btn btn-md bg-info shadow-none custom-bg"> Book Now </a>
                <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
              </div>
            </div>                        
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Our rooms end -->

<div class="container-fluid availability-form mt-4">
  <div class="row px-lg-5">
    <div class="col-lg-12 d-lg-block d-md-block d-none shadow p-4 bg-white rounded">
      <h4 class="fs-3">FILTERS</h4>
      <form>
          <div class="row mt-4 align-items-end pb-3">
              <div class="col-lg-2">
                  <label for="date" class="form-lable mb-2" style="font-size: 500;">By date</label>
                  <input type="date" class="form-control shadow-none" name="date" id="date">
              </div>
              <div class="col-lg-2">
                  <label for="room-type" class="form-lable mb-2" style="font-size: 500;">By Room Type</label>
                  <select class="form-select shadow-none" aria-label="Default select example">
                  <option value="all">All Rooms</option>
                  <option value="standard">Standard Rooms</option>
                  <option value="connect">Connect Rooms</option>
                  <option value="dulex">Dulex Rooms</option>
                  <option value="super-dulex">Super Dulex Rooms</option>
                  <option value="luxury">Luxury Rooms</option>
                  <option value="suits">Suits</option>
                </select>
              </div>
              <div class="col-lg-2">
                <label class="form-label">By Guest </label>
                <select class="form-select shadow-none" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">four</option>
                  <option value="5">five</option>
                </select>
              </div>
              <div class="col-lg-2">
                <label class="form-label">By Rooms </label>
                <select class="form-select shadow-none" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">four</option>
                  <option value="5">five</option>
                </select>
              </div>
              <div class="col-lg-2 mx-auto">
                  <button type="submit" class="btn btn-primary border-0 shadow-none text-white fs-5 px-3 custom-btn">Apply Filters</button>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
        
    <div class="col-lg-4 col-md-6 mb-5"> 
      <div class="card shadow-lg" style="max-width:350px;">
        <img src="images\rooms\r1.jpg" class="card-img-top ">
        <div class="card-body">
          <h5 class="card-title mb-3">Standard Rooms</h5>
          <h6 class="mb-4"> ₹ 500 per night </h6> 
          <p class="card-text">Perfect for the single person and for couple.A standard room can accommodate up to two guests.
              The room may also have a small sitting area, such as a sofa or an armchair.</p>
          <div class="mb-4">
            <h6 class="mb-1">Rating</h6>
            <span>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-3">
            <a href="#" class="btn btn-md bg-info shadow-none custom-bg"> Book Now </a>
            <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
          </div>
        </div>
      </div>                        
    </div>
            
    <div class="col-lg-4 col-md-6 mb-5"> 
      <div class="card shadow-lg" style="max-width:350px;">
        <img src="images\rooms\c5.jpg" class="card-img-top ">
        <div class="card-body">
          <h5 class="card-title mb-3">Connect Room</h5>
          <h6 class="mb-4"> ₹ 8000 per night </h6> 
          <p class="card-text">These are two rooms connected by a locked adjoining door that can be opened by you and your fellow guests during your stay.
          located next to each other, and these rooms have a connecting door. 
          </p>
          <div class="mb-4">
            <h6 class="mb-1">Rating</h6>
            <span>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-3">
            <a href="#" class="btn btn-md btn-info shadow-none custom-bg"> Book Now </a>
            <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
          </div>
        </div>                        
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5"> 
      <div class="card shadow-lg" style="max-width:350px;">
        <img src="images\rooms\d1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title mb-3">Dulex Rooms</h5>
          <h6 class="mb-4"> ₹ 1000 per night </h6> 
          <p class="card-text">Deluxe rooms are usually larger than their standard counterparts, 
              may include a bathtub and a shower in the bathroom.
              Deluxe Plus rooms offer extra floor space along with exceptional design features.</p>
          <div class="mb-4">
            <h6 class="mb-1">Rating</h6>
            <span>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-3">
            <a href="#" class="btn btn-md btn-info shadow-none custom-bg"> Book Now </a>
            <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
          </div>                   
        </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 mb-5"> 
      <div class="card shadow-lg" style="max-width:350px;">
        <img src="images\rooms\s4.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title mb-3">Super Dulex Rooms</h5>
          <h6 class="mb-4"> ₹ 2000 per night </h6> 
          <p class="card-text">Super deluxe room is spacious provided with sofa's, 
                bath room fitted with bath tubs.
                Some of the Super deluxe rooms are carpeted and some are having wooden flooring.</p>
          <div class="mb-4">
            <h6 class="mb-1">Rating</h6>
            <span>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-3">
            <a href="#" class="btn btn-md btn-info shadow-none custom-bg"> Book Now </a>
            <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
          </div>                    
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5"> 
      <div class="card shadow-lg" style="max-width:350px;">
        <img src="images\rooms\l1.jpg" class="card-img-top ">
        <div class="card-body">
          <h5 class="card-title mb-3">Luxury Rooms</h5>
          <h6 class="mb-4"> ₹ 10000 per night </h6> 
          <p class="card-text">Luxury Rooms are typically smaller, and have a clear creative sense and emphasis on design compared to traditional hotels.Beautiful views in every direction – inside and out.</p>
          <div class="mb-4">
            <h6 class="mb-1">Rating</h6>
            <span>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-3">
            <a href="#" class="btn btn-md btn-info shadow-none custom-bg"> Book Now </a>
            <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
          </div>
        </div>                       
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-5"> 
      <div class="card shadow-lg" style="max-width:350px;">
        <img src="images\rooms\su2.jpg" class="card-img-top ">
        <div class="card-body">
          <h5 class="card-title mb-3">Suits</h5>
          <h6 class="mb-4"> ₹ 15000 per night </h6> 
          <p class="card-text">It usually refers to rooms together, like when you get a suite at a fancy hotel.
              Suites class of accommodations with more space than a typical hotel room,but there should be more than one room to constitute a true suite.</p>
          <div class="mb-4">
            <h6 class="mb-1">Rating</h6>
            <span>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-3">
            <a href="#" class="btn btn-md btn-info shadow-none custom-bg"> Book Now </a>
            <a href="#" class="btn btn-md btn-outline-dark shadow-none custom-bg"> More Details</a>
          </div>
        </div>                        
      </div>
    </div>

  </div>  
</div>


<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->


    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>