<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('./inc/links.php'); ?>
    <title>TJ Hotel - ROOMS</title>
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
      <div class="carousel-item active" data-bs-interval="1500">
        <img src="images/carousel/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <img src="images/carousel/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <img src="images/carousel/3.png" class="d-block w-100" alt="...">
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
<h1 class="mt-5 p-4 mb-4 text-center h-font">OUR ROOMS</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        cards
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