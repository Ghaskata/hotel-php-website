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
    <?php require('inc/links.php');?>
    <title>Admin Panel - setting</title>
</head>
<body>
    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        Settings page
    </div>
    <!-- <div class="container-fluid" id="dashboard-main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Settings
            </div>
        </div>
    </div> -->

    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>