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

<?php
  // delete room
  if (isset($_GET['del'])) {
      $id=$_GET['del'];
      $q="SELECT * FROM `rooms` WHERE `id`='$id';";
      $res=mysqli_query($con,$q);
      if ($res->num_rows==1) {
          $row=mysqli_fetch_assoc($res);
          $mimg_url="../images/RoomsImg/".$row['mimg'];
          $sub1_url="../images/RoomsImg/".$row['sub1'];
          $sub2_url="../images/RoomsImg/".$row['sub2'];
          $sub3_url="../images/RoomsImg/".$row['sub3'];
          if (file_exists($mimg_url)||file_exists($sub1_url)||file_exists($sub2_url)||file_exists($sub3_url)) {
              unlink($mimg_url);
              unlink($sub1_url);
              unlink($sub2_url);
              unlink($sub3_url);
          }else{
              // echo "file not exists";
          }
      }

    $faci_sql="SELECT * FROM `room_facility` WHERE `room_id`=".$id;
    $fea_sql="SELECT * FROM `room_features` WHERE `room_id`=".$id;

    $faci_res=mysqli_query($con,$faci_sql);
    $fea_res=mysqli_query($con,$fea_sql);

    if($faci_res->num_rows>0){
        $facility="DELETE FROM `room_facility` WHERE `room_id`='$id';";
        mysqli_query($con,$facility);
    }
    if($fea_res->num_rows>0){
        $feature="DELETE FROM `room_features` WHERE `room_id`='$id';";
        mysqli_query($con,$feature);
    }
        
        
    $sql="DELETE FROM `rooms` WHERE `id`='$id';";
    if(mysqli_query($con,$sql))
    {
        timerAlert("success","Rooms Deleted Succesfully!!!",1500,'center');
    }
    else{
        simpleAlert('ERROR!',"Room Delete Opration Failed","error");
    }
      
  }
?>
<?php
    if (isset($_GET['feature'])) {
        $sql="SELECT f.`name` FROM `features` AS f ,`room_features` as rf,`rooms` AS r WHERE r.`id`=rf.`room_id` AND rf.`feature_id`=f.`id` AND rf.`room_id` =".$_GET['feature'];
        $res=mysqli_query($con,$sql);
        $return='';
        if($res->num_rows>0){
            $return.='<div class="row w-75 mx-auto">';
            $i=1;
            while($row=mysqli_fetch_assoc($res)){                
                $return.='<div class="col-12 mb-3 mt-2 fs-5">'.$row['name'].'</div><hr class="w-75 mx-auto">';
                $i++;
            }
            $return.='</div>';
        }else{
            $return= "no features available";
        }
        echo<<<print
        <script>
            let data='$return';
            Swal.fire({
                title:'Features',
                html:data
            })
        </script>
print;
    }
?>

<?php
    if (isset($_GET['facility'])) {
        $sql="SELECT f.`icon`,f.`name` FROM `facilities` AS f ,`room_facility` as rf,`rooms` AS r WHERE r.`id`=rf.`room_id` AND rf.`facilitiy_id`=f.`id` AND r.`id`=".$_GET['facility'];
        $res=mysqli_query($con,$sql);
        $return='';
        if($res->num_rows>0){
            $return.='<div class="row w-75 mx-auto">';
            $i=1;
            while($row=mysqli_fetch_assoc($res)){                
                $return.='<div class="col-6 mb-3"><img src="../images/facilities/'.$row['icon'].'" height="50px" width="50px"/></div><div class="col-6 mb-3 fs-5"> ' .$row['name'].'</div><hr class="w-100 mx-auto">';
                $i++;
            }
            $return.='</div>';
        }else{
            $return= "no features available";
        }
    echo<<<print
        <script>
            let data='$return';
            Swal.fire({
                title:'Features',
                html:data
            })
        </script>
print;
    }
?>

<?php
    if (isset($_GET['image'])) {
        $sql="SELECT `mimg`,`sub1`,`sub2`,`sub3` FROM `rooms` WHERE `id`=".$_GET['image'];
        $res=mysqli_query($con,$sql);
        $return='';
        if($res->num_rows>0){
            $return.='<div class="row w-100 mx-auto">';
            $i=1;
            while($row=mysqli_fetch_assoc($res)){                
                $return.='<div class="col-12 mb-3"><img src="../images/RoomsImg/'.$row['mimg'].'" width="100%"/></div><div class="col-4 mb-3"><img src="../images/RoomsImg/'.$row['sub1'].'"  width="100%"/></div><div class="col-4 mb-3"><img src="../images/RoomsImg/'.$row['sub2'].'" width="100%"/></div><div class="col-4 mb-3"><img src="../images/RoomsImg/'.$row['sub3'].'" width="100%"/></div>';
                $i++;
            }
            $return.='</div>';
        }else{
            $return= "no features available";
        }
    echo<<<print
        <script>
            let data='$return';
            Swal.fire({
                title:'Features',
                html:data
            })
        </script>
print;
    }
?>

    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <!-- <h3 class="mb-4">Feactures</h3> -->
        <!-- features card -->
        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="card-title m-0">Rooms</h2>
                    <button class="btn btn-outline-success btnadd fs-5 px-4 shadow-none btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#roomsModel">
                        <i class="fa fa-plus me-2"></i>Add
                    </button>
                    <button class="btn btn-outline-success btnupdate fs-5 px-4 shadow-none btn-sm d-none" type="button" data-bs-toggle="modal" data-bs-target="#roomsModel">
                        <i class="fa fa-plus me-2"></i>update
                    </button>
                </div>

                <div class="table-responsive-md" style="height:60vh;overflow-y: scroll;">
                    <table class="table table-hover text-center">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">No</th>
                                <th scope="col">Room Name</th>
                                <th scope="col">Area</th>
                                <th scope="col">Price</th>
                                <th scope="col">Feature</th>
                                <th scope="col">Facility</th>
                                <th scope="col">Images</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="animate__animated animate__fadeIn">
                        <?php
                            $sql="SELECT * FROM `rooms` ORDER BY `id` DESC";
                            $res=mysqli_query($con,$sql);
                            if($res->num_rows>0){
                                $i=1;
                                while ($row=mysqli_fetch_assoc($res)) {
                                    $delete="<a href='?del=$row[id]' class='btn btn-sm btndelete btn-danger px-3 fs-6'><i class='fa fa-trash me-2'></i>Delete</a>";
                                    $edit="<button onclick='editRoom($row[id])' class='btn btn-sm btnedit btn-primary px-3 fs-6 me-3'><i class='fa fa-pencil'></i></button>";
                                    $image="<a href='?image=$row[id]' class='btn btn-sm btnimage btn-info px-3 fs-6'><i class='fa fa-images'></i></a>";
                                    $feature="<a href='?feature=$row[id]' style='text-decoration : none;'>view</a>";
                                    $facility="<a href='?facility=$row[id]' style='text-decoration : none;'>view</a>";
                                    echo<<<datarow
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[area]</td>
                                            <td>$row[price]</td>
                                            <td id="feature">$feature</td>
                                            <td>$facility</td>
                                            <td>$image</td>
                                            <td>$edit    $delete</td>
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
                                        <label class="form-label fw-bold">Select Room Name </label>
                                        <select name="room_name" id="room_name" class="form-control shadow-none" required>
                                            <?php
                                                $sql="SELECT * FROM `room_type`;";
                                                $res=mysqli_query($con,$sql);
                                                $return='';
                                                if($res->num_rows>0){
                                                    while($row=mysqli_fetch_assoc($res)){
                                                        $return.='<option value="'.$row['type'].'">'.$row['type'].'</option>';
                                                    }
                                                    echo $return;
                                                }else{
                                                    echo "no room types available";
                                                }
                                            ?>
                                        </select>
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
                                <div class="col-md-6 ps-0 mb-3 roomImg">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Main Image</label>
                                        <input type="file" id="mimg" accept=".jpg,.png,.jpeg,.webp" name="mimg" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-4 ps-0 mb-3 roomImg">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Sub 1</label>
                                        <input type="file" id="sub1" accept=".jpg,.png,.jpeg,.webp" name="sub1" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-4 ps-0 mb-3 roomImg">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Sub 2</label>
                                        <input type="file" id="sub2" accept=".jpg,.png,.jpeg,.webp" name="sub2" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-4 ps-0 mb-3 roomImg">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Sub 3</label>
                                        <input type="file" id="sub3" accept=".jpg,.png,.jpeg,.webp" name="sub3" class="form-control shadow-none" required>
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
                                                        $id=str_replace(' ','',$row['name']);
                                                        $return.='<div class="col-3 form-check mb-2">
                                                        <input type="checkbox" id="'.$id.'" name="feature[]" value="'.$row['id'].'" class="form-check-input shadow-none">
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
                                                        $id=str_replace(' ','',$row['name']);
                                                        $return.='<div class="col-4 form-check my-3">
                                                        <input type="checkbox" id="'.$id.'" name="facility[]" value="'.$row['id'].'" class="form-check-input shadow-none">
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
                                <!-- <div class="col-md-12 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Description</label>
                                        <textarea class="form-control shadow-none"  name="desc" id="desc" cols="10" rows="3" required></textarea>
                                    </div>
                                </div> -->
                            </div>
                            <div class="modal-footer" >
                                <button type="button" class="btn btn-secondary btncancle" data-bs-dismiss="modal">cancle</button>
                                <button type="submit" id="submit" class="btn btn-success submit shadow-none me-3 d-block"> Add Room</button>
                                <button id="update" class="btn btn-primary update shadow-none me-3"> Update</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    
      <script>
        $(document).ready(function(){

            $('#submit').click(function(e){
                e.preventDefault();
                $.ajax({
                    url:'ajax/room-curd.php',
                    data:new FormData($('#roomsModel_form')[0]),
                    method:'POST',
                    processData:false,
                    contentType:false,
                    success:function(data){
                        alert(data)
                        if(data=="added"){
                            <?php timerAlertForScript("success","New Room Added Succesfully",2000,'center'); ?>
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                        }
                        else if(data=="room is already available"){
                            <?php simpleAlertForScript('ERROR!',"Room Add Opration Failed Because Room is Already Available","error");?>
                        }
                        else{
                            <?php simpleAlertForScript('ERROR!',"Opration Failed","error");?>
                        }
                    },
                    error:function(){
                        alert('error')
                    }
                })
            })

            $('#update').click(function(e){
                e.preventDefault();
                $('#room_name').removeAttr('disabled')
                $('#area').removeAttr('disabled')
                $.ajax({
                    url:'ajax/room-curd.php',
                    data:$('#roomsModel_form').serialize(),
                    method:'PATCH',
                    success:function(data){
                        alert(data)
                        if(data){
                            <?php timerAlertForScript("success","Room Updated Succesfully",2000,'center'); ?>
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                        }
                        else{
                            <?php simpleAlertForScript('ERROR!',"Room Updated Opration Failed","error");?>
                        }
                    },
                    error:function(){
                        alert('error')
                    }
                })
            })

            $('.btnadd').click(function(){
                $('.modal-title').text("Add New Room");
                $('#room_name').val("")
                $('#room_name').removeAttr('disabled')
                $('#area').val("")
                $('#area').removeAttr('disabled')
                $('#price').val("")
                $.each($("input[name='facility[]']:checked"), function(){    
                    $(this).removeAttr('checked');
                }); 
                $.each($("input[name='feature[]']:checked"), function(){    
                    $(this).removeAttr('checked');
                }); 
                $('#submit').removeClass('d-none').addClass("d-block");
                $('#update').removeClass("d-block").addClass("d-none");
                $('.roomImg').show();
            })
            
            $('.btncancle').click(function(){
                $('#room_name').val("")
                $('#room_name').removeAttr('disabled')
                $('#area').val("")
                $('#area').removeAttr('disabled')
                $('#price').val("")
                $.each($("input[name='facility[]']:checked"), function(){    
                    $(this).removeAttr('checked');
                }); 
                $.each($("input[name='feature[]']:checked"), function(){    
                    $(this).removeAttr('checked');
                }); 
                $('.roomImg').show();
            })


            $('.btndelete').click(function(e){
                var url = e.currentTarget.getAttribute('href')
                console.log(url);
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You want to Delete This Room ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href=url;
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                    }
                    else{
                        window.location.href='/hotel-php-website/Admin/rooms.php';
                    }
                });
            })

        })
        function editRoom(id){
            $.ajax({
                type:'GET',
                url:'ajax/room-curd.php',
                data:{editRoomId:id},
                success:function(data){
                    console.log(data);
                    console.log("============");
                    
                    const row=JSON.parse(data)
                    console.log(row)
                    // console.log(row.room.id)
                    // console.log(row.feature)
                    // console.log(row.facilities)

                    $('#room_name').val(row.room.name)
                    $('#room_name').attr('disabled',true)
                    $('#area').val(row.room.area)
                    $('#area').attr('disabled',true)
                    $('#price').val(row.room.price)
                    
                    
                    for (let i = 0; i < row.feature.length; i++) {
                        console.log(row.feature[i])
                        $(`#${row.feature[i].replace(' ','')}`).attr('checked',true)
                    }
                    for (let i = 0; i < row.facilities.length; i++) {
                        console.log(row.facilities[i])
                        $(`#${row.facilities[i].replace(' ','')}`).attr('checked',true)
                    }
                }
            });

            $('.modal-title').text("Update Room");
            $('.roomImg').hide();
            $('#submit').removeClass('d-block').addClass("d-none");
            $('#update').removeClass("d-none").addClass("d-block");
            $('.btnupdate').click();
        }
      </script>

        
    

<script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>