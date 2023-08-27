<?php
    require('inc/func.php');
    require('inc/db_conn.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Admin Panel - Feactures & Facilities</title>
</head>
<body>
    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <h3 class="mb-4">Feactures & Facilities</h3>
        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title m-0">Featuers</h5>
                    <button class="btn btn-outline-success fs-5 px-4 shadow-none btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#featuresModel">
                        <i class="fa fa-plus me-2"></i>Add
                    </button>
                </div>
                
                <div class="collapse p-1" id="featuresModel">
                    <h5 class="modal-title m-3"> Add New Feature </h5>
                    <form id="featuresModel_form" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Feature Name </label>
                            <input type="text" name="feature_name" class="form-control shadow-none" required>
                        </div>
                        <div class="modal-footer" >
                            <button type="reset" class="btn text-secondary shadow-none">Cancel</button>
                            <button type="submit" class="btn btn-success shadow-none me-3"> Add Feature</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
   
    <?php
        if (isset($_POST['feature_name'])) {
            $name=$_POST['feature_name'];
            $sql="INSERT INTO `features`(`name`) VALUES ('$name')";
            if (mysqli_query($con,$sql)) {
                alert('success',"Feature Added Succesfully");
            }
            else{
                alert('error',"Opration Failed");
            }
        }
    ?>
    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>