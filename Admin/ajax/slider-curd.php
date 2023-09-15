<?php
require('../inc/db_conn.php');
require('../inc/func.php');
adminLogin();


if (isset($_POST['query'])&&$_POST['query']=="all") {

    $sql="SELECT * FROM `home_silder`;";
    $res=mysqli_query($con,$sql);
    $return="";

    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $return.='<div class="home_slider col-3 my-3" style="height: 250px;">
                        <a href="?delSliderImage='.$row['id'].'" class="remove_home_slider_img"><i class="fa fa-trash"></i></a>
                        <img src="../images/carousel/'.$row['image'].'" alt="...">
                    </div>';
        }
        $return.='<div class="home_slider col-3 my-3" data-bs-toggle="modal" data-bs-target="#addSliderModel" style="height: 250px;">
                    <div class="bg-light add_home_slider_img"><i class="fa fa-plus"></i></div>
                </div>';
        echo $return;
    }
    else{
        $return.='<div class="home_slider col-3 my-3" data-bs-toggle="modal" data-bs-target="#addSliderModel" style="height: 250px;">
                    <div class="bg-light add_home_slider_img"><i class="fa fa-plus"></i></div>
                </div>';
        echo $return;
    }
}

if (isset($_FILES['newSlide'])) {
    $image=$_FILES['newSlide']['name'];
    $ext=pathinfo($image,PATHINFO_EXTENSION);
    $newName=rand().".".$ext;
    $path=$_SERVER['DOCUMENT_ROOT']."/hotel-php-website/images/carousel/".$newName;

    if(move_uploaded_file($_FILES['newSlide']['tmp_name'],$path)){
        $sql="INSERT INTO `home_silder`(`image`) VALUES ('$newName');";
        if ($res=mysqli_query($con,$sql)) {
            echo 'new slide add';
        }else{
            $err=mysqli_error($con);
            echo $err;
        }
    }else{
        echo "file not upload";
    }
}


if (isset($_POST['room_type'])&&$_POST['room_type']=="all") {

    $sql="SELECT * FROM `room_type`;";
    $res=mysqli_query($con,$sql);
    $return="";

    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $return.='<div class="room_type_slider col-3 my-3" style="height: 200px;">
                        <a href="?delRoomType='.$row['id'].'" class="remove_room_type"><i class="fa fa-trash"></i></a>
                        <div class="roomType">'.$row['type'].'</div>    
                        <img src="../images/slider/'.$row['image'].'" alt="...">
                    </div>';
        }
        $return.='<div class="room_type_slider col-3 my-3" data-bs-toggle="modal" data-bs-target="#addRoomTypeModel" style="height: 200px;">
                    <div class="bg-light add_room_type"><i class="fa fa-plus"></i></div>
                </div>';
        echo $return;
    }
    else{
        $return.='<div class="room_type_slider col-3 my-3" data-bs-toggle="modal" data-bs-target="#addRoomTypeModel" style="height: 200px;">
                    <div class="bg-light add_room_type"><i class="fa fa-plus"></i></div>
                </div>';
        echo $return;
    }
}

if (isset($_POST['room_type']) && isset($_FILES['room_type_image']['name'])) {
    $type=$_POST['room_type'];
    $image=$_FILES['room_type_image']['name'];
    $desc=$_POST['room_type_desc'];
    $ext=pathinfo($image,PATHINFO_EXTENSION);
    $newName=rand().".".$ext;   
    $path=$_SERVER['DOCUMENT_ROOT']."/hotel-php-website/images/slider/".$newName;

    if(move_uploaded_file($_FILES['room_type_image']['tmp_name'],$path)){
        $sql="INSERT INTO `room_type`(`type`, `image`,`desc`) VALUES ('$type','$newName','$desc');";
        if ($res=mysqli_query($con,$sql)) {
            echo 'new slide add';
        }else{
            $err=mysqli_error($con);
            echo $err;
        }
    }else{
        echo "file not upload";
    }
}

?>