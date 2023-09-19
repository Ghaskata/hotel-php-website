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
    <title><?php echo $websiteTitle; ?> - More Detail</title>
</head>

<body>
    <!-- navbar -->
<?php
  require('./inc/header.php');
?>
    <?php
        if (isset($_GET['room'])) {
            $select="SELECT 
                    *
                    FROM 
                        rooms, room_type
                    WHERE 
                    rooms.name = room_type.type AND 
                    rooms.id =".$_GET['room'];
            
            if ($result = mysqli_query($con, $select)) {
                $row = mysqli_fetch_assoc($result);

                $faci_sql="SELECT * FROM `room_facility` WHERE `room_id`=".$_GET['room'];
                $fea_sql="SELECT * FROM `room_features` WHERE `room_id`=".$_GET['room'];

                $faci_res=mysqli_query($con,$faci_sql);
                $fea_res=mysqli_query($con,$fea_sql);
                
    ?>  
                <h2 class="mb-3 pt-4 text-center fw-bold h-font"><?php echo $row['type']?> Rooms </h2>
                <div class="container-fluide px-3 check-avalibility">
                    <div class="row">     
                        <div class="col-lg-8 mt-3 mb-3">
                            <img src="images/RoomsImg/<?php echo $row['mimg']?>" class="rounded" width="100%">
                            <div class="row">
                                <div class="col-lg-4 mt-3">
                                    <img src="images/RoomsImg/<?php echo $row['sub1']?>" class="rounded" width="100%">
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <img src="images/RoomsImg/<?php echo $row['sub2']?>" class="rounded" width="100%">
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <img src="images/RoomsImg/<?php echo $row['sub3']?>" class="rounded" height="100%" width="100%">
                                </div>
                            </div>    
                        </div>
                        
                        <div class="col-lg-4">
                            
                            <h3 class="mb-2 mt-2 fw-bold g-font"> Description </h3>
                            <p style="font-size:20px;"> <?php echo $row['desc']?>       
                            <h2 class="mb-2"> ₹ <?php echo $row['price']?> per night </h2>
        
                            <span style="font-size:20px;">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                            </span>          
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="check-in" class="form-lable mb-2" style="font-size: 500;">Check-In</label>
                                    <input type="date" class="form-control shadow-none" name="check-in" id="check-in" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="check-out" class="form-lable mb-2" style="font-size: 500;">Check-Out</label>
                                    <input type="date" class="form-control shadow-none" name="check-out" id="check-out" required>
                                </div>
                            </div>                                              
                        <div class="row">
                            <h3 class="mb-1 mt-4 ps-3 fw-bold g-font"> Feactures </h3>
                            <div class="row ps-3">
                                <?php 
                                    while($fea_row = mysqli_fetch_assoc($fea_res)){
                                        $sql="SELECT * FROM `features` where id=".$fea_row['feature_id'];
                                        $res=mysqli_query($con,$sql);
                                        $f=mysqli_fetch_assoc($res);
                                        echo '<div class="col-4 py-1 ms-1">'.$f['name'].'</div>';
                                    }                 
                                ?>
                            </div>

                            <h3 class="mb-2 mt-2 ps-3  fw-bold g-font"> Amenities </h3>
                            <ul class="amenities ps-3">
                                <?php 
                                    while($faci_row = mysqli_fetch_assoc($faci_res)){
                                        $sql="SELECT * FROM `facilities` where id=".$faci_row['facilitiy_id'];
                                        $res=mysqli_query($con,$sql);
                                        $f=mysqli_fetch_assoc($res);
                                        echo '<li class="py-1 ms-4"><img src="images/facilities/'.$f['icon'].'" class="ms-3 me-2" height="25px" width="25px" alt="faci_row"/>'.$f['name'].'</li>';
                                    }                 
                                ?>
                            </ul>
                            <div class="d-flex mb-3">
                                <button type="submit" onclick="checkLogin();" class="btn btn-lg  ms-5 bg-info shadow-none custom-bg"> Book Now </button>
                                <a href="rooms.php" class="btn btn-lg ms-5  btn-dark shadow-none custom-bg"> Cancel </a>
                            </div>
                        </div>
                            
                        
                        </div>
                    
                        
                    </div>                         
                </div>
    <?php            
            } else {
                echo "Error executing the query: " . mysqli_error($con);
            }
        } 
        else {
            echo "No data received.";
        }
    ?>

<!-- footer -->
<script>
    function checkLogin(){
        <?php
        if ($login) {
            echo "
            var checkin=$('#check-in').val();
            var checkout=$('#check-out').val();
            if(checkin){
                Swal.fire({
                    title: 'Book Room ? ',
                    text: 'You Are Really want to Book this Room ',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Book Now!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:'Admin/ajax/book.php',
                            method:'POST',
                            data:{roomid:$_GET[room],uid:$_SESSION[userId],checkin:checkin,checkout:checkout}
                          }).then(()=>{
                            Swal.fire({
                                title: 'Well Done !',
                                text: 'Room Booked Successfully',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            }).then(()=>{
                                window.location.href='/hotel-php-website/Admin/recipt.php?roomid=$_GET[room]&uid=$_SESSION[userId]&checkin='+checkin+'&checkout='+checkout;
                            })
                          });
                    }
                })
            }
            else{
                Swal.fire({
                    title: 'SomeThing Missing !',
                    text: 'For Room Booke Check in and check out date require',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                });
                return;
            }
            ";
        }else{
            echo "Swal.fire({
                title: 'Login? 😒',
                text: 'You wont be able to Book Room Please login first!',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Login Now!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('.btnlogin').click();
                }
            })";
        }  
        ?>
    }
</script>
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->
    <script src="css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>