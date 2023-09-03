<?php
    require('../inc/db_conn.php');
    require('../inc/func.php');
    

    //registation
    if (isset($_POST['name'])
        &&isset($_POST['uname'])
        &&isset($_POST['phone'])
        &&isset($_POST['email'])
        &&isset($_POST['address'])
        &&isset($_POST['pass'])
        &&isset($_POST['cpass']))
        {
            $name=$_POST['name'];
            $uname=mysqli_real_escape_string($con,$_POST['uname']);
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $pass=$_POST['pass'];
            $cpass=$_POST['cpass'];
            if($_POST['pass']!=$_POST['cpass']){
                echo 'password not match';
            }else{
                $sql="SELECT * FROM `usertbl` WHERE `uname`= '$uname';";
                $res=mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)==1){
                        echo "User Is Alredy Exist";
                    }
                    else{
                        $sql="INSERT INTO `usertbl`(`name`, `uname`, `phone`, `email`, `address`, `password`) VALUES ('$name','$uname','$phone','$phone','$address',md5('$pass'))";
                        if($res=mysqli_query($con,$sql)){
                            echo "user created";
                        }
                    }
            }
    }


    //login
    if (isset($_POST['LoginName'])&&isset($_POST['LoginPass'])) {
        $uname=mysqli_real_escape_string($con,$_POST['LoginName']);
        $pass=$_POST['LoginPass'];
        $sql="SELECT * FROM `usertbl` WHERE `uname`='$uname' AND `password`=md5('$pass');";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==1){
            echo "found";
        }else{
            echo "User Not Found";
        }
    }
?>
