<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('./inc/links.php'); ?>
    <title>TJ Hotel - HOME</title>
  </head>
<body class="bg-light">


<!-- navbar -->
<?php
  require('./inc/header.php');
?>
<!-- navbar end -->


<!-- main section -->
  <div class="hero-img-div">
    <img src="images/hero_2.jpg" alt="hero section" class="hero-img">
    <div class="hero-text">
      <h1>text here.....</h1>
    </div>
  </div>
<!-- main section end -->

<!-- Our rooms -->
<h1 class="mt-5 p-4 mb-4 text-center h-font">OUR ROOMS</h1>
  <div class="container">
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

<div class="container shadow my-5">
  <h1 class="text-center h-font">OUR FACILITIES</h1>
  <div class="h-line bg-dark"></div>
</div>

<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->

    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>