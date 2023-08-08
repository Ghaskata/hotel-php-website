<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>TJ Hotel - HOME</title>
  </head>
<body class="bg-light">


<!-- navbar -->
<?php
  require('./inc/header.php');
?>
<!-- navbar end -->
<!-- slider -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1000">
        <img src="images/carousel/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="images/carousel/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="images/carousel/3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="images/carousel/4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="images/carousel/5.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="images/carousel/6.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
<!-- slider -->



<!-- check available Rooms -->
<div class="container availability-form">
    <div class="row">
        <div class="col-12 shadow p-4 bg-white rounded">
            <h5 class="fs-4">Checking Rooms Booking Availability</h5>
            
            <form>
                <div class="row mt-4 align-items-end">
                    <div class="col-lg-5">
                        <label for="check-in" class="form-lable mb-2" style="font-size: 500;">Check-In</label>
                        <input type="date" class="form-control shadow-none" name="check-in" id="check-in">
                    </div>
                    <div class="col-lg-5">
                        <label for="check-out" class="form-lable mb-2" style="font-size: 500;">Check-Out</label>
                        <input type="date" class="form-control shadow-none" name="check-out" id="check-out">
                    </div>
                    <div class="col-lg-1 mx-auto">
                        <button type="submit" class="btn btn-primary shadow-none text-white">Check</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- check available Rooms end-->

<!-- Our rooms -->
<h1 class="mt-5 pb-2 text-center h-font mb-0">OUR ROOMS</h1>
<div class="bg-dark h-line mb-4"></div>
  <div class="container py-4 px-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card shadow ">
          <img src="images/img_1.jpg" alt="" class="card-img top">
        <div class="card-body">
          <h2>Simple Room</h2>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card shadow ">
          <img src="images/img_2.jpg" alt="" class="card-img top">
        <div class="card-body">
          <h2>Classic Room</h2>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card shadow ">
          <img src="images/img_3.jpg" alt="" class="card-img top">
        <div class="card-body">
          <h2>Luxurius Room</h2>
        </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>    
  </div>
<!-- Our rooms end -->

<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->

    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>