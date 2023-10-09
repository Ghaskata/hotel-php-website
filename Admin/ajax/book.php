<?php
require('../inc/db_conn.php');
require('../inc/func.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $roomid=$_POST['roomid'];
    $uid=$_POST['uid'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];

    $sql_2="SELECT * FROM `tblbooking` WHERE `checkout` > '$checkin' AND `rid`='$roomid'";
    // $sql_2="SELECT * FROM `tblbooking` WHERE `checkin` <= '$checkout' AND `checkout` => '$checkin' AND `rid`='$roomid'";
    
    $res_2=mysqli_query($con,$sql_2);
    if ($res_2->num_rows>=1) {
        echo "already booked";
    }
    else{
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
}
?>