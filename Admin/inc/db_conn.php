<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="hotelwebsite";

    $con=mysqli_connect($host,$user,$password,$database);
    if(!$con){
        die("not connected".mysqli_connect_eror());
    }
    
    $sql="SELECT * FROM `tbltitles`";
    if ($res=mysqli_query($con,$sql)) {
        if ($res->num_rows==1) {
            $row=mysqli_fetch_assoc($res);
            $websiteTitle=$row['Title'];
            $slider_lg_msg=$row['slider_lg_msg'];
            $slider_md_msg=$row['slider_md_msg'];
            $slider_sm_msg=$row['slider_sm_msg'];
        }
    }
    


    function select($sql,$values,$datatypes){
        $con=$GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("don't work not executed - select");
            }
        }
        else{
            die("don't work not prepare - select");
        }
    }

    
    function close_connection(){
        mysqli_close($_GLOBALS['$con']);
    }
?>