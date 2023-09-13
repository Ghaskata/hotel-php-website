<?php
require('../inc/db_conn.php');
require('../inc/func.php');
adminLogin();

if (isset($_POST['websiteTitle'])) {
    $title=$_POST['websiteTitle'];
    $sql="UPDATE `tbltitles` SET `Title`='$title';" ;
    $res= mysqli_query($con,$sql); 
    if ($res) {
        echo $res;
    }
}

if (isset($_POST['slider_md_msg'])) {
    $slider_md_msg=$_POST['slider_md_msg'];
    $slider_lg_msg=$_POST['slider_lg_msg'];
    $slider_sm_msg=$_POST['slider_sm_msg'];
    $sql="UPDATE `tbltitles` SET `slider_lg_msg`='$slider_lg_msg',`slider_md_msg`='$slider_md_msg',`slider_sm_msg`='$slider_sm_msg';" ;
    $res= mysqli_query($con,$sql); 
    if ($res) {
        echo $res;
    }
}

?>