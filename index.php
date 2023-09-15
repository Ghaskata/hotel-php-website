<?php 
require('Admin/inc/db_conn.php');
require('Admin/inc/func.php');
$login=userLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title><?php echo $websiteTitle; ?> - HOME</title>
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
<!-- SELECT * FROM `home_silder` -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
        $sql="SELECT * FROM `home_silder`";
        $res=mysqli_query($con,$sql);
        $result='';
        if (mysqli_num_rows($res)>0) {
          $i=1;
          while ($row=mysqli_fetch_assoc($res)) {
            if ($i==1) {
              $result.='
              <div class="carousel-item active" data-bs-interval="1500" style="width: 100%;height: 100vh;">
                <img src="images/carousel/'.$row['image'].'" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
              </div>';
              $i++;
            }
            else{
              $result.='
              <div class="carousel-item" data-bs-interval="1500" style="width: 100%;height: 100vh;">
                <img src="images/carousel/'.$row['image'].'" class="d-block w-100 h-100 carousel-image" alt="..." style="object-fit: cover;">
              </div>';
              $i++;
            }
          }
          echo $result;
        }
      ?>
    </div>
    <div class="carousel-caption d-none d-md-block animate__animated animate__zoomIn"style="top:5%;">
      <h2 class="mt-4 mb-5 text-light" style="font-family:cursive;"><?php echo $slider_md_msg?></h2>
      <h5 class="text-white pt-4" style="font-size: 90px;font-family:'Times New Roman', Times, serif;"><?php echo $slider_lg_msg?></h5>
      <p class="m-3 pb-1 text-white"><?php echo $slider_sm_msg?></p>
    </div>
  </div>
<!-- slider -->



<!-- check available Rooms -->
<div class="container availability-form">
    <div class="row">
        <div class="col-12 shadow p-4 bg-white rounded">
            <h4 class="fs-3">Checking Rooms Booking Availability</h4>
            
            <form method="POST" name="check" action="rooms.php">
                <div class="row mt-4 align-items-end pb-3">
                    <div class="col-lg-4">
                        <label for="check-in" class="form-lable mb-2" style="font-size: 500;">Check-In</label>
                        <input type="date" class="form-control shadow-none" name="check-in" id="check-in">
                    </div>
                    <div class="col-lg-4">
                        <label for="check-out" class="form-lable mb-2" style="font-size: 500;">Check-Out</label>
                        <input type="date" class="form-control shadow-none" name="check-out" id="check-out">
                    </div>
                    <!-- <div class="col-lg-2">
                      <label class="form-label"> Guest </label>
                      <select class="form-select shadow-none" aria-label="Default select example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div> -->
                    <div class="col-lg-3">
                      <label class="form-label"> Rooms </label>
                      <select class="form-select shadow-none" aria-label="Default select example">
                        <?php 
                          $sql="SELECT * FROM `room_type`";
                          $res=mysqli_query($con,$sql);
                            if($res->num_rows>0){
                              while($row=mysqli_fetch_assoc($res)){
                                echo '<option value="'.$row['type'].'">'.$row['type'].'</option>';
                              }
                            }
                        ?>
                      </select>
                    </div>
                    <div class="col-lg-1 mx-auto">
                        <button type="submit" class="btn btn-primary btnBook border-0 shadow-none text-white fs-5 px-2 custom-btn">Check</button>
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
    <?php 
      $result='';
      $sql="SELECT * FROM `room_type`";
      $res=mysqli_query($con,$sql);
        if($res->num_rows>0){
          while($row=mysqli_fetch_assoc($res)){
            $result.='<div class="col-lg-4 mb-4">
                        <a href="rooms.php">
                          <div class="card text-white rooms-card" style="max-width :350px;">
                            <img class="card-img" src="images/slider/'.$row['image'].'" alt="'.$row['type'].'">
                            <div class="card-img-overlay">
                              <h5 class="card-title"> '.$row['type'].' </h5>
                            </div> 
                          </div>
                        </a>
                      </div>';
          }
          echo $result;
        }
    ?>
  </div>  
  <div class="col-lg-12 text-center mt-5">
    <a href="rooms.php" class="btn btn-lg btn-outline-dark rounded-0 a-btn d-grid gap-2 col-3 mx-auto mb-5 mt-5"> More Rooms >>> </a>
  </div>
</div>




<script>
  $(document).ready(function(e){
    $('.book').click(function(e){
      e.preventDefault();
      $('form[name=check]').submit();
    })
  })


  
</script>


<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->
    <script src="css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>