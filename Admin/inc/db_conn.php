<?php
    $host="localhost";
    $user="";
    $password="";
    $database="hotelwebsite";

    $con=mysqli_connect($host,$user,$password,$database);
    if(!$con){
        die("not connected".mysqli_connect_eror());
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