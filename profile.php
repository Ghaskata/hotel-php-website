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
    <title><?php echo $websiteTitle; ?> - Profile</title>
</head>


<body>
<!-- navbar -->
<?php
  require('./inc/header.php');
?>
<!-- navbar end -->
<?php
    if($login){
        $sql="SELECT * FROM `usertbl` WHERE `id`= ".$_SESSION['userId'];
        $res=mysqli_query($con,$sql);
        if($res->num_rows==1){
           $row=mysqli_fetch_assoc($res);
           $username=$row['uname']; 
           $name=$row['name'];
           $phone=$row['phone'];
           $email=$row['email'];
           $address=$row['address'];
           $join=$row['datetime'];
        }
    }
?>

<div class="container bg-light border-0 shadow card my-5">
    <div class="card-body text-center">
        <img src="images/user.webp" alt="avatar"
            class="rounded-circle img-fluid" style="width: 150px;">
        <h2 class="my-3"><?php echo $username;?></h2>
        <p class="text-muted fs-4 mb-2">Full Name : <?php echo $name;?></p>
        <p class="text-muted fs-5 mb-2">Phone : <?php echo $phone;?></p>
        <p class="text-muted fs-5 mb-2">email : <?php echo $email;?></p>
        <p class="text-muted fs-4 mb-4">Address : <?php echo $address;?></p>
        <div class="d-flex justify-content-center mb-2">
            <a type="button" href="logout.php" class="btn btn-danger fs-5 px-3 shadow-none" >LogOut</a>
        </div>
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