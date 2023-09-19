<?php
require('../inc/db_conn.php');
require('../inc/func.php');
adminLogin();

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $roomid=$_POST['roomid'];
    $uid=$_POST['uid'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $sql="INSERT INTO `tblbooking`(`checkin`, `checkout`, `uid`, `rid`) VALUES ('$checkin','$checkout','$uid','$roomid')";
    $res=mysqli_query($con,$sql);
    if($res){
        $sql1="UPDATE `tblbooking` SET `total_day`=DATEDIFF(`checkout`,`checkin`)";
        $res1=mysqli_query($con,$sql1);
        if ($res1) {
            echo "yes";
        }
    }
}
?>