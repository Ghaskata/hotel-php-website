<?php
require('../inc/db_conn.php');
require('../inc/func.php');

if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['msg'])) {
    $name=addslashes($_POST['name']);
    $email=addslashes($_POST['email']);
    $subject=addslashes($_POST['subject']);
    $msg=addslashes($_POST['msg']);


    $sql="INSERT INTO `user_query`(`sr_no`,`name`, `email`, `subject`, `message`) SELECT Max(`sr_no`)+1,'$name','$email','$subject','$msg' FROM `user_query`";
    $res=mysqli_query($con,$sql);
    echo $res;
}
?>