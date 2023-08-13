<?php
    require('inc/func.php');
    require('inc/db_conn.php');
    session_start();
    if(isset($_SESSION['adminLogin'])&&$_SESSION['adminLogin']==true){
        header("location:dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>Admin Login panel</title>
</head>
<body class="bg-white h-100 pt-4">
    <div class="container px-3 py-4 mx-auto my-5 bg-light shadow w-75">
        <h1 class="text-center h-font mt-3">Admin Login</h1>
        <div class="bg-dark h-line mb-4"></div>
        <div class="row">
        <div class="col-6 mx-auto my-auto">
            <form method="POST">
                <div class="form-group mb-4">
                    <label for="aname" class="fs-5 mb-1">Admin Name</label>
                    <input type="text" name="aname" class="form-control shadow-none" id="aname" placeholder="Enter Admin Name" autocomplete="off" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="fs-5 mb-1">Password</label>
                    <input type="password" name="password" class="form-control shadow-none" id="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary shadow-none px-4 py-2 fs-5 my-4">Log In</button>
            </form>
        </div>
        </div>
    </div>

<?php
    if (isset($_POST['login'])) {
        $query="SELECT * FROM `admintbl` WHERE `name`= ? AND `password`= ? ";         
        $values=[$_POST['aname'],md5($_POST['password'])];
        $res = select($query,$values,"ss");
        if($res->num_rows==1){
            $row=mysqli_fetch_assoc($res);
            $_SESSION['adminLogin']=true;
            $_SESSION['adminId']=$row['aid'];
            header("location:dashboard.php");
        }
        else{
            alert("error","Login Failed - Invalid Credintioal !!!");
        }
    }
?>

</body>
</html>