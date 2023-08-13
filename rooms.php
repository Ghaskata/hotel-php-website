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

    <div class="col-lg-9 col-md-12">

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