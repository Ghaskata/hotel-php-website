<?php
    require('Admin/inc/db_conn.php');
    session_start();
    session_destroy();
    mysqli_close($con);
    header("location:index.php");
?>