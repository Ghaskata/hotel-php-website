<?php
require('../inc/db_conn.php');
require('../inc/func.php');
adminLogin();

if (isset($_POST['room_name'])) {
    $name=$_POST['room_name'];
    $area=$_POST['area'];
    $price=$_POST['price'];
    $quan=$_POST['quan'];
    $adult=$_POST['adult'];
    $child=$_POST['child'];
    $desc=$_POST['desc'];
    $feature=$_POST['feature'];
    $facility=$_POST['facility'];
$f='';
$fa='';
    $flag=0;
    $sql="INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES ('$name','$area','$price','$quan','$adult','$child','$desc');";
    if ($res=mysqli_query($con,$sql)) {
        $flag=1;

        $room_id=mysqli_insert_id($con);
        
        foreach ($feature as $fea) {
            $f.=$fea;
            $q="INSERT INTO `room_features`(`room_id`, `feature_id`) VALUES ('$room_id','$fea')";
            $res=mysqli_query($con,$q);
        }
        foreach ($facility as $faci) {
            $fa.=$faci;
            $q="INSERT INTO `room_facility`(`room_id`, `facilitiy_id`) VALUES ('$room_id','$faci')";
            $res=mysqli_query($con,$q);
        }
    
        echo "added";
    }
    else{
        echo "not added";
    }
}

?>