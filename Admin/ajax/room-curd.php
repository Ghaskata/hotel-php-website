<?php
require('../inc/db_conn.php');
require('../inc/func.php');
adminLogin();

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $name=$_POST['room_name'];
    $area=$_POST['area'];
    $price=$_POST['price'];
    $feature=$_POST['feature'];
    $facility=$_POST['facility'];
    
    $find_sql="SELECT * FROM `rooms` WHERE `name`='". $name ."' AND `area`=".$area;
    $find_res=mysqli_query($con,$find_sql);
    
    if($find_res->num_rows>0){
        echo "room is already available";
    }else{
        $mimg=$_FILES['mimg']['name'];
        $sub1=$_FILES['sub1']['name'];
        $sub2=$_FILES['sub2']['name'];
        $sub3=$_FILES['sub3']['name'];
        
        $mimgext=pathinfo($mimg,PATHINFO_EXTENSION);
        $sub1ext=pathinfo($sub1,PATHINFO_EXTENSION);
        $sub2ext=pathinfo($sub2,PATHINFO_EXTENSION);
        $sub3ext=pathinfo($sub3,PATHINFO_EXTENSION);

        $newMimg=$name."-".$area."-main.".$mimgext;   
        $newSub1=$name."-".$area."-sub1.".$sub1ext;   
        $newSub2=$name."-".$area."-sub2.".$sub2ext;   
        $newSub3=$name."-".$area."-sub3.".$sub3ext;   

        $mimgPath=$_SERVER['DOCUMENT_ROOT']."/hotel-php-website/images/RoomsImg/".$newMimg;
        $sub1Path=$_SERVER['DOCUMENT_ROOT']."/hotel-php-website/images/RoomsImg/".$newSub1;
        $sub2Path=$_SERVER['DOCUMENT_ROOT']."/hotel-php-website/images/RoomsImg/".$newSub2;
        $sub3Path=$_SERVER['DOCUMENT_ROOT']."/hotel-php-website/images/RoomsImg/".$newSub3;

        if(move_uploaded_file($_FILES["mimg"]["tmp_name"], $mimgPath) &&
            move_uploaded_file($_FILES["sub1"]["tmp_name"], $sub1Path) &&
            move_uploaded_file($_FILES["sub2"]["tmp_name"], $sub2Path) &&
            move_uploaded_file($_FILES["sub3"]["tmp_name"], $sub3Path)){
            $flag=0;
            $sql="INSERT INTO `rooms`(`name`, `area`, `price`,`mimg`,`sub1`,`sub2`,`sub3`) VALUES ('$name','$area','$price','$newMimg','$newSub1','$newSub2','$newSub3');";
            if ($res=mysqli_query($con,$sql)) {
                $flag=1;

                $room_id=mysqli_insert_id($con);
                
                foreach ($feature as $fea) {
                    $q="INSERT INTO `room_features`(`room_id`, `feature_id`) VALUES ('$room_id','$fea')";
                    $res=mysqli_query($con,$q);
                }
                foreach ($facility as $faci) {
                    $q="INSERT INTO `room_facility`(`room_id`, `facilitiy_id`) VALUES ('$room_id','$faci')";
                    $res=mysqli_query($con,$q);
                }
            
                echo "added";
            }
            else{
                echo "not added";
            }
        }else{
            echo "file not upload";
        }
    }
}


if (isset($_GET['editRoomId'])) {
    $select="SELECT 
            *
            FROM 
                rooms, room_type
            WHERE 
            rooms.name = room_type.type AND 
            rooms.id =".$_GET['editRoomId'];
    
    if ($result = mysqli_query($con, $select)) {
        $row = mysqli_fetch_assoc($result);


        $faci_sql="SELECT * FROM `room_facility` WHERE `room_id`=".$_GET['editRoomId'];
        $fea_sql="SELECT * FROM `room_features` WHERE `room_id`=".$_GET['editRoomId'];

        $faci_res=mysqli_query($con,$faci_sql);
        $fea_res=mysqli_query($con,$fea_sql);
        
        $fea=array();
        while($fea_row = mysqli_fetch_assoc($fea_res)){
            $sql="SELECT `name` FROM `features` where id=".$fea_row['feature_id'];
            $res=mysqli_query($con,$sql);
            $feaRow=mysqli_fetch_assoc($res);
            // $fea[$feaRow['name']]=$feaRow['name'];
            array_push($fea,$feaRow['name']);
        }         
        $faci=array();        
        while($faci_row = mysqli_fetch_assoc($faci_res)){
            $sql="SELECT * FROM `facilities` where id=".$faci_row['facilitiy_id'];
            $res=mysqli_query($con,$sql);
            $faciRow=mysqli_fetch_assoc($res);
            // $faci[$faciRow['name']]=$faciRow['name'];
            array_push($faci,$faciRow['name']);
        }     
        
        $data =array();
        $data['room']=$row;
        $data['feature']=$fea;
        $data['facilities']=$faci;
        
        //$data=array($row,$fea,$faci);
        $myJson=json_encode($data);
        echo $myJson;
    }
    else {
        echo "Error executing the query: " . mysqli_error($con);
    }
}


if($_SERVER['REQUEST_METHOD']==='PATCH'){
    $data=array();
    parse_str(file_get_contents("php://input"),$data);

    $price=$data['price'];
    $name=$data['room_name'];
    $feature=$data['feature'];
    $facility=$data['facility'];
    

    $sql="SELECT * FROM `rooms` WHERE `name`='". $name ."' AND `area`=".$data['area'];
    $sql_res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($sql_res);
    $room_id=$row['id'];

    $faci_sql="SELECT * FROM `room_facility` WHERE `room_id`=".$room_id;
    $fea_sql="SELECT * FROM `room_features` WHERE `room_id`=".$room_id;

    $faci_res=mysqli_query($con,$faci_sql);
    $fea_res=mysqli_query($con,$fea_sql);



    if($faci_res->num_rows>0){
        $faci_del_qry="DELETE FROM `room_facility` WHERE `room_id`=".$room_id;
        mysqli_query($con,$faci_del_qry);
    }
    if($fea_res->num_rows>0){
        $fea_del_qry="DELETE FROM `room_features` WHERE `room_id`=".$room_id;
        mysqli_query($con,$fea_del_qry);
    }



    foreach ($feature as $fea) {
        $q="INSERT INTO `room_features`(`room_id`, `feature_id`) VALUES ('$room_id','$fea')";
        $res=mysqli_query($con,$q);
    }
    foreach ($facility as $faci) {
        $q="INSERT INTO `room_facility`(`room_id`, `facilitiy_id`) VALUES ('$room_id','$faci')";
        $res=mysqli_query($con,$q);
    }


    $q="UPDATE `rooms` SET `price`= '". $price ."' WHERE `id`=".$room_id;   
    $q_res=mysqli_query($con,$q);
    echo $q_res;

}
?>