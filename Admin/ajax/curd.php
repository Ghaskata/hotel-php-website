<?php
    require('../inc/db_conn.php');
    require('../inc/func.php');
    adminLogin();


    if (isset($_POST['feature_name'])) {
        $name=$_POST['feature_name'];
        $sql="INSERT INTO `features`(`id`,`name`) SELECT Max(`id`)+1,'$name' FROM `features`";
        $res=mysqli_query($con,$sql);
        echo $res;
    }



    if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['msg'])) {
        $name=addslashes($_POST['name']);
        $email=addslashes($_POST['email']);
        $subject=addslashes($_POST['subject']);
        $msg=addslashes($_POST['msg']);
    
    
        $sql="INSERT INTO `user_query`(`sr_no`,`name`, `email`, `subject`, `message`) SELECT Max(`sr_no`)+1,'$name','$email','$subject','$msg' FROM `user_query`";
        $res=mysqli_query($con,$sql);
        echo $res;
    }


    if(isset($_POST['facility_name'])){
        $name=$_POST['facility_name'];
        $desc=$_POST['facility_desc'];

        $icon=$_FILES['facility_icon']['name'];
        $ext=pathinfo($icon,PATHINFO_EXTENSION);
        $new_name=rand().'.'.$ext;
        $path=$_SERVER['DOCUMENT_ROOT'].'/hotel-php-website/images/facilities/'.$new_name;
        
        if (move_uploaded_file($_FILES['facility_icon']['tmp_name'],$path)){
            simpleAlert('','file uploaded','success');
        }
        $sql="INSERT INTO `facilities`(`icon`,`name`,`description`) VALUES ('$new_name','$name','$desc');";
        if ($res=mysqli_query($con,$sql)) {
            echo $res;
        }
        else{
            $err=mysqli_error($con);
            echo $err;
        }
        // $sql="INSERT INTO `facilities`(`id`,`icon`,`name`,`description`) SELECT Max(`id`)+1,'$icon','$name','$desc' FROM `facilities`";
    }
?>
