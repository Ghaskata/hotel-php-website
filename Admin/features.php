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
    <title>Admin Panel - Feactures</title>
</head>
<body>

<?php
if (isset($_GET['del'])) {
        $sql="DELETE FROM `features` WHERE `id`=".$_GET['del'];
        if(mysqli_query($con,$sql))
        {
            timerAlert("success","Feature Deleted Succesfully!!!",1500,'center');
        }
        else{
            simpleAlert('ERROR!',"Opration Failed","error");
        }
 }
?>

    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <!-- <h3 class="mb-4">Feactures</h3> -->
        <!-- features card -->
        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="card-title m-0">Featuers</h2>
                    <button class="btn btn-outline-success fs-5 px-4 shadow-none btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#featuresModel">
                        <i class="fa fa-plus me-2"></i>Add
                    </button>
                </div>
                
                <div class="modal fade" id="featuresModel" tabindex="-1" role="dialog" aria-labelledby="featuresModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content p-4">
                            <form id="featuresModel_form" method="POST">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Feature Name </label>
                                    <input type="text" id="feature_name" name="feature_name" class="form-control shadow-none" required>
                                </div>
                                <div class="modal-footer" >
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
                                    <button type="submit" id="submit" class="btn btn-success shadow-none me-3"> Add Feature</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                <!-- <div class="collapse p-1" id="featuresModel">
                    <h5 class="modal-title m-3"> Add New Feature </h5>
                    <form id="featuresModel_form" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Feature Name </label>
                            <input type="text" id="feature_name" name="feature_name" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Feature Image</label>
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control shadow-none" required>                        </div>
                        <div class="modal-footer" >
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
                            <button type="submit" id="submit" class="btn btn-success shadow-none me-3"> Add Feature</button>
                        </div>
                    </form> 
                </div> -->

                <?php
                
                    if (isset($_POST['updateFea'])) {
                        $id=$_POST['updateFea'];
                        $name1=$_POST['feature_name'];
                        $sql="UPDATE `features` SET `name`='$name1' WHERE `id`='$id'";
                        if ($res=mysqli_query($con,$sql)) {
                            timerAlert('success','Feature updated successfully',1000,'center');
                        }else{
                            // echo mysqli_error($con);
                        }
                    }

                    if (isset($_POST['btnupdate'])) {
                        $id1= $_POST['btnupdate'];
                        $sql1="SELECT * FROM `features` WHERE `id`='$id1'";
                        $res1=mysqli_query($con,$sql1);
                        if($res1->num_rows==1){
                            $row1=mysqli_fetch_assoc($res1);
                            echo<<<print
                            <form method="POST" class="row align-items-end">
                                <div class="col-9 mb-3">
                                    <label class="form-label fw-bold">Feature Name </label>
                                    <input type="text" id="feature_name" name="feature_name" value="$row1[name]" class="form-control shadow-none"/>
                                </div> 
                                <div class="col-3 mb-3 ml-5">
                                    <button class="btn btn-secondary ms-3 me-1">cancle</button>
                                    <button name="updateFea" class="btn btn-primary shadow-none" value="$id1"> update Feature</button>
                                </div>
                            </form> 
print;
                        }
                    }
                ?>

                <div class="table-responsive-md" style="height:0v6h;overflow-y: scroll;">
                    <table class="table table-hover text-center">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col" width="20%">No</th>
                                <th scope="col" width="50%">Feature Name</th>
                                <th scope="col" width="30%">Action</th>
                            </tr>
                        </thead>
                        <tbody class="animate__animated animate__fadeIn">
                            <?php
                                $sql="SELECT * FROM `features` ORDER BY `id` DESC";
                                $res=mysqli_query($con,$sql);
                                if($res->num_rows>0){
                                    $i=1;
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $update="<button type='submit' value='$row[id]' name='btnupdate' class='btn btn-sm btnupdate btn-primary me-5'><i class='fa fa-edit me-2'></i>Edit</button>";
                                        $delete="<a href='?del=$row[id]' class='btn btn-sm btndelete btn-danger'><i class='fa fa-trash me-2'></i>Delete</a>";
                                        echo<<<datarow
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td><form method="POST">$update   $delete</form></td>
                                            </tr>
datarow;
                                        $i++;
                                    }
                                }
                                else{
                                    //no record found
                                }
                            ?>
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>

    <script>
        $('#featuresModel_form').submit((e)=>{
            $.ajax({
                url:'ajax/feature-facility-curd.php',
                type:'POST',
                data:$('#featuresModel_form').serialize(),
                success:function(data){
                    if(data){
                        <?php timerAlertForScript("success","New Feature Added Succesfully",2000,"center"); ?>
                        setInterval(() => {
                            window.location.href='/hotel-php-website/Admin/features.php';
                        }, 2000);
                    }else{
                        <?php simpleAlertForScript('ERROR!',"Opration Failed","error");?>
                    }
                },
                error:function(){
                    console.log("error");
                }

                });
                e.preventDefault();
        })
    </script>
    <script>
        $('.btndelete').click(function(e){
            var url = e.currentTarget.getAttribute('href')
            // console.log(url);
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure ?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href=url;
                }
                else{
                    window.location.href='/hotel-php-website/admin/features.php';
                }
            });
        })
    </script>
    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>