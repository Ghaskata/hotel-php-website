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

<!-- Our rooms -->
<div class="my-5 mx-4">
  <h1 class="text-center h-font">OUR ROOMS</h1>
  <div class="h-line bg-dark mb-4"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2">FILTERS</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#fillterSection" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column" id="fillterSection">
            <div class="border p-3 rounded bg-light mb-3">
              <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                <label for="check-in" class="form-lable mb-2">Check-In</label>
                <input type="date" class="form-control shadow-none mb-4" name="check-in" id="check-in">

                <label for="check-out" class="form-lable mb-2">Check-Out</label>
                <input type="date" class="form-control shadow-none" name="check-out" id="check-out">
            </div>

            <div class="border p-3 rounded bg-light mb-3">
              <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                <label for="check-in" class="form-lable mb-2">Check-In</label>
                <input type="date" class="form-control shadow-none mb-4" name="check-in" id="check-in">

                <label for="check-out" class="form-lable mb-2">Check-Out</label>
                <input type="date" class="form-control shadow-none" name="check-out" id="check-out">
            </div>  
          </div>
        </div>
      </nav>
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