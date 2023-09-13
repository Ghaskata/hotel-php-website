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
    <title>Admin Panel - Rooms</title>
</head>
<body>
    
    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <!-- <h3 class="mb-4">Feactures</h3> -->
        <!-- features card -->
        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="card-title m-0">Rooms</h2>
                    <button class="btn btn-outline-success fs-5 px-4 shadow-none btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#roomsModel">
                        <i class="fa fa-plus me-2"></i>Add
                    </button>
                </div>

                <div class="table-responsive-md" style="height:60vh;overflow-y: scroll;">
                    <table class="table table-hover text-center">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">No</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">Area</th>
                                <th scope="col">Guests</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Feature</th>
                                <th scope="col">Facility</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql="SELECT * FROM `rooms`";
                            $res=mysqli_query($con,$sql);
                            if($res->num_rows>0){
                                $i=1;
                                while ($row=mysqli_fetch_assoc($res)) {
                                    $delete="<a href='?del=$row[id]' class='btn btn-sm btndelete btn-danger'><i class='fa fa-trash me-2'></i>Delete</a>";
                                    $edit="<a href='?edit=$row[id]' class='btn btn-sm btndelete btn-primary'><i class='fa fa-pencil'></i></a>";
                                    $image="<a href='?image=$row[id]' class='btn btn-sm btndelete btn-info'><i class='fa fa-images'></i></a>";
                                    $feature="<a href='?feature=$row[id]' style='text-decoration : none;'>view</a>";
                                    $facility="<a href='?facility=$row[id]' style='text-decoration : none;'>view</a>";
                                    if ($row['status']) {
                                        $status="<a href='?status=$row[id]' class='btn btn-sm btndelete btn-info' style='text-decoration : none;'>Active</a>";
                                    }else{
                                        $status="<a href='?status=$row[id]' class='btn btn-sm btndelete btn-info' style='text-decoration : none;'></a>";
                                    }
                                    echo<<<datarow
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[area]</td>
                                            <td >
                                                Adults : $row[adult]    <br>
                                                Children : $row[children]
                                            </td>
                                            <td>$row[price]</td>
                                            <td>$row[quantity]</td>
                                            <td>$feature</td>
                                            <td>$facility</td>
                                            <td>$status</td>
                                            <td>$edit $image $delete</td>
                                        </tr>
datarow;
                                    $i++;
                                }
                            }
                            else{
                                //no record found
                                echo "Any Facility Not Founds";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="roomsModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="roomsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title d-flex align-items-center fs-5">
                        <i class="fa-solid fa-plus fs-3 me-3"></i> Add New Room
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="roomsModel_form" method="POST">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Room Name </label>
                                        <input type="text" id="room_name" name="room_name" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Room Area</label>
                                        <input type="text" id="area" name="area" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Room Price </label>
                                        <input type="text" id="price" name="price" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Quantity</label>
                                        <input type="text" id="quan" name="quan" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Adult (Max.)</label>
                                        <input type="text" id="adult" name="adult" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Children (Min.)</label>
                                        <input type="text" id="child" name="child" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Featuers</label>
                                        <div class="row px-4">
                                            <?php
                                                $sql="SELECT * FROM `features`;";
                                                $res=mysqli_query($con,$sql);
                                                $return='';
                                                if($res->num_rows>0){
                                                    while($row=mysqli_fetch_assoc($res)){
                                                        $return.='<div class="col-3 form-check mb-2">
                                                        <input type="checkbox" id="'.$row['name'].'" name="feature[]" value="'.$row['id'].'" class="form-check-input shadow-none">
                                                        <label for="'.$row['name'].'" class="form-check-label">'.$row['name'].'</label>
                                                        </div>';
                                                    }
                                                    echo $return;
                                                }else{
                                                    echo "no features available";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Facilities</label>
                                        <div class="row px-4">
                                            <?php
                                                $sql="SELECT * FROM `facilities`;";
                                                $res=mysqli_query($con,$sql);
                                                $return='';
                                                if($res->num_rows>0){
                                                    while($row=mysqli_fetch_assoc($res)){
                                                        $return.='<div class="col-4 form-check my-3">
                                                        <input type="checkbox" id="'.$row['name'].'" name="facility[]" value="'.$row['id'].'" class="form-check-input shadow-none">
                                                        <label for="'.$row['name'].'" class="form-check-label">
                                                            <img src="../images/facilities/'.$row['icon'].'" height="30px" width="30px" class="ms-3 me-1">
                                                            '.$row['name'].'
                                                        </label>
                                                        </div>';
                                                    }
                                                    echo $return;
                                                }else{
                                                    echo "no features available";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Description</label>
                                        <textarea class="form-control shadow-none"  name="desc" id="desc" cols="10" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
                                <button type="submit" id="submit" class="btn btn-success shadow-none me-3"> Add Room</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    
   
      <script>
        $(document).ready(function(){
            $('#roomsModel_form').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'ajax/room-curd.php',
                    data:$(this).serialize(),
                    method:'POST',
                    success:function(data){
                        if(data=="added"){
                            <?php timerAlertForScript("success","New Room Added Succesfully",2000,'center'); ?>
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                        }else{
                            <?php simpleAlertForScript('ERROR!',"Opration Failed","error");?>
                        }
                    },
                    error:function(){
                        alert('error')
                    }
                })
            })
        })
      </script>
    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>