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
    <title>Admin Panel - Facilities</title>
</head>
<body>

<?php
if (isset($_GET['del'])) {
        $sql="DELETE FROM `facilities` WHERE `id`=".$_GET['del'];
        if(mysqli_query($con,$sql))
        {
            simpleAlert('Success!',"Facility Deleted Succesfully!!!","success");
        }
        else{
            simpleAlert('ERROR!',"Opration Failed","error");
        }
 }
?>

    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <h3 class="mb-4">Facilities</h3>
        <!-- features card -->
        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="card-title m-0">Add New Facilities</h5>
                    <button class="btn btn-outline-success fs-5 px-4 shadow-none btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#faciModel">
                        <i class="fa fa-plus me-2"></i>Add
                    </button>
                </div>
                
                <div class="modal fade" id="faciModel" tabindex="-1" role="dialog" aria-labelledby="faciModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content p-4">
                            <form id="faciModel_form" method="POST">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Facility Name </label>
                                    <input type="text" name="facility_name" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Facility Icon </label>
                                    <input type="file" name="facility_icon" class="form-control shadow-none" accept=".svg" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Facility Description </label>
                                    <textarea name="facility_desc" rows="3" class="form-control shadow-none" required></textarea>
                                </div>
                                <div class="modal-footer" >
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
                                    <button type="submit" id="submit" class="btn btn-success shadow-none me-3"> Add Facility</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>

                <div class="table-responsive-md" style="height:50vh;overflow-y: scroll;">
                    <table class="table table-hover text-center">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">No</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Facility Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql="SELECT * FROM `facilities`";
                                $res=mysqli_query($con,$sql);
                                if($res->num_rows>0){
                                    $i=1;
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $delete="<a href='?del=$row[id]' class='btn btn-sm btndelete btn-danger'><i class='fa fa-trash me-2'></i>Delete</a>";
                                        echo<<<datarow
                                            <tr>
                                                <td>$i</td>
                                                <td><img src="../images/facilities/$row[icon]"></td>
                                                <td>$row[name]</td>
                                                <td>$row[description]</td>
                                                <td>$delete</td>
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
        $(document).ready(function(){
            $('#faciModel_form').submit(function(e){
            e.preventDefault();
            $.ajax({
                url:'ajax/curd.php',
                type:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    if(data){
                        console.log(data);
                        <?php timerAlertForScript("success","New Facility Added Succesfully",2000); ?>
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                    }else{
                        console.log(data);
                        <?php simpleAlertForScript('ERROR!',"Opration Failed","error");?>
                    }
                },
                error:function(){
                    console.log("error");
                }

                });
            })
        })
    </script>
    <script>
        $('.btndelete').click(function(e){
            var url = e.currentTarget.getAttribute('href')
            console.log(url);
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
                    window.location.href='/hotel-php-website/admin/facilities.php';
                }
            });
        })
    </script>
    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>