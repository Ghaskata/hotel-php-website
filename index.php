<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>TJ Hotel - HOME</title>
    <style>
      .carousel-image{
        filter: brightness(40%);
      }
    </style>
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
      <div class="carousel-item active" data-bs-interval="1000" style="width: 100%;height: 100vh;">
        <img src="images\2.jpg" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="1000" style="width: 100%;height: 100vh;">
        <img src="images\3.jpg" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="1000" style="width: 100%;height: 100vh;">
        <img src="images\4.jpg" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="1000" style="width: 100%;height: 100vh;">
        <img src="images\5.jpg" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="1000" style="width: 100%;height: 100vh;">
        <img src="images/carousel/5.png" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="1000" style="width: 100%;height: 100vh;">
        <img src="images/carousel/6.png" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
      </div>
    </div>
    <div class="carousel-caption d-none d-md-block"style="top:5%;">
      <h2 class="mt-4 mb-5 text-light" style="font-family:cursive;">Life Is A Beautiful Journey , Live It Well</h2>
      <h5 class="text-white pt-4 fw-bold" style="font-size: 70px;font-family:'Times New Roman', Times, serif;">Amazing Services , Location & Facilities</h5>
      <p class="m-3 pb-1 text-white">Best Place To Stay</p>
    </div>
  </div>
<!-- slider -->



<!-- check available Rooms -->
<div class="container availability-form">
    <div class="row">
        <div class="col-12 shadow p-4 bg-white rounded">
            <h4 class="fs-3">Checking Rooms Booking Availability</h4>
            
            <form>
                <div class="row mt-4 align-items-end pb-3">
                    <div class="col-lg-5">
                        <label for="check-in" class="form-lable mb-2" style="font-size: 500;">Check-In</label>
                        <input type="date" class="form-control shadow-none" name="check-in" id="check-in">
                    </div>
                    <div class="col-lg-5">
                        <label for="check-out" class="form-lable mb-2" style="font-size: 500;">Check-Out</label>
                        <input type="date" class="form-control shadow-none" name="check-out" id="check-out">
                    </div>
                    <!-- <div class="col-lg-2">
                      <label class="form-label"> Guest </label>
                      <select class="form-select shadow-none" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">four</option>
                        <option value="5">five</option>
                      </select>
                    </div>
                    <div class="col-lg-2">
                      <label class="form-label"> Rooms </label>
                      <select class="form-select shadow-none" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">four</option>
                        <option value="5">five</option>
                      </select>
                    </div> -->
                    <div class="col-lg-1 mx-auto">
                        <button type="submit" class="btn btn-primary border-0 shadow-none text-white fs-5 px-3 custom-btn">Check</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- check available Rooms end-->


<!-- rooms card -->
<h1 class="mt-5 pb-2 text-center h-font mb-0">OUR ROOMS</h1>
<div class="bg-dark h-line mb-5"></div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 mb-4">
      <a href="rooms.php">
        <div class="card text-white rooms-card" style="max-width :350px;">
          <img class="card-img" src="images\rooms\r2.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h5 class="card-title"> Standard </h5>
          </div> 
        </div>
      </a>
    </div>
    <div class="col-lg-4 mb-4">
      <a href="rooms.php">
        <div class="card text-white rooms-card" style="max-width :350px;">
          <img class="card-img" src="images\rooms\d2.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h5 class="card-title"> Dulex </h5>
          </div> 
        </div>
      </a>
    </div>
    <div class="col-lg-4 mb-4">
      <a href="rooms.php">
        <div class="card text-white rooms-card" style="max-width :350px;">
          <img class="card-img" src="images/rooms/l3.jpg" alt="Card image">
          <div class="card-img-overlay">
            <h5 class="card-title mr-3"> Luxury </h5>
          </div> 
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="rooms.php" class="btn btn-lg btn-outline-dark rounded-0 a-btn d-grid gap-2 col-3 mx-auto mb-5 mt-5"> More Rooms >>> </a>
  </div>
</div>


<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->

    <script src="css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>