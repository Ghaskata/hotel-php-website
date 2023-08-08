<?php
    require('inc/func.php');
    require('inc/db_conn.php');
    adminLogin();
    session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>Admin Panel - Dashboard</title>
</head>
<body>
    <div class="bg-light py-3 shadow d-flex align-items-center justify-content-between">
        <h1 class="ms-5 mb-0 h-font">Hotel Booking Website</h1> 
        <a class="btn btn-primary me-5 fs-5 my-2 px-4" href="logout.php">LogOut</a>  
    </div>
    
</body>
</html>