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
    <title>Admin Panel - Dashboard</title>
</head>
<body class="bg-light">
    <?php
    // delete home slider image
    if (isset($_GET['delSliderImage'])) {
        $id=$_GET['delSliderImage'];
        $q="SELECT * FROM `home_silder` WHERE `id`='$id';";
        $res=mysqli_query($con,$q);
        if ($res->num_rows==1) {
            $row=mysqli_fetch_assoc($res);
            $img_url="../images/carousel/".$row['image'];
            if (file_exists($img_url)) {
                unlink($img_url);
            }else{
                // echo "file not exists";
            }
        }
        $sql="DELETE FROM `home_silder` WHERE `id`='$id';";
        if(mysqli_query($con,$sql))
        {
            timerAlert("success","Slider Image Deleted Succesfully!!!",1500,'center');
        }
        else{
            simpleAlert('ERROR!',"Opration Failed","error");
        }
    }

// delete room type
    if (isset($_GET['delRoomType'])) {
        $id=$_GET['delRoomType'];
        $q="SELECT * FROM `room_type` WHERE `id`='$id';";
        $res=mysqli_query($con,$q);
        if ($res->num_rows==1) {
            $row=mysqli_fetch_assoc($res);
            $img_url="../images/slider/".$row['image'];
            if (file_exists($img_url)) {
                unlink($img_url);
            }else{
                // echo "file not exists";
            }
        }
        $sql="DELETE FROM `room_type` WHERE `id`='$id';";
        if(mysqli_query($con,$sql))
        {
            timerAlert("success","Room Type Deleted Succesfully!!!",1500,'center');
        }
        else{
            simpleAlert('ERROR!',"Opration Failed","error");
        }
    }
    ?>
    <?php require('inc/header.php'); ?>


<!-- website title editing section-->
    <div class="col-lg-10 ms-auto p-4" id="">
        <div class="border-0 shadow">
            <div class="card-body pb-3">
                <div class="card-title">
                    <h3 class="fs-2">WebSite Title</h3>
                </div>
                <hr>
                <form name="frmtitle" method="post">
                    <div class="d-flex justify-content-between ms-2 me-5" id="">
                        <input type="text" name="websiteTitle" class="txttitle form-control fs-2 bg-light border-0 w-75" placeholder="enter Website title" value="<?php echo $websiteTitle; ?>" disabled>
                        <button class="editTitle btn border-0 bg-light shadow-none"><i class="fa fa-pen-alt text-primary fs-3"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- slider text editing section-->
    <div class="col-lg-10 ms-auto p-4" id="">
        <div class="border-0 shadow">
            <div class="card-body pb-3">
                <div class="card-title">
                    <h4 class="fs-3">Slider Caption</h4>
                </div>
                <hr>
                <form name="frmcaption" method="post">
                    <div class="row d-flex justify-content-between ms-2 me-5" id="">
                        <div class="col-11">
                            <p class="fs-5 text-secondary">Top</p> <input type="text" name="slider_md_msg" class="slider_md_msg mt-1 form-control fs-4 bg-light border-0 border-bottom" placeholder="enter Slider Top Caption" value="<?php echo $slider_md_msg; ?>" disabled><br>
                            <p class="fs-5 text-secondary">Middle</p><input type="text" name="slider_lg_msg" class="slider_lg_msg mt-1 form-control fs-3 bg-light border-0 border-bottom" placeholder="enter Slider Middle Caption" value="<?php echo $slider_lg_msg; ?>" disabled><br>
                            <p class="fs-5 text-secondary">Bottom</p><input type="text" name="slider_sm_msg" class="slider_sm_msg mt-1 form-control fs-5 bg-light border-0 border-bottom" placeholder="enter Slider Bottom Caption" value="<?php echo $slider_sm_msg; ?>" disabled><br>
                        </div>
                        <div class="col-1">
                            <button class="editCaption btn border-0 bg-light shadow-none"><i class="fa fa-pen-alt text-primary fs-3"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- home page slider image section -->
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <div class="border-0 shadow">
            <div class="card-body pb-3">
                <div class="card-title">
                    <h3>Home Page Slider Image</h3>
                </div>
                <hr>
                <div class="row pt-2" id="home_slider_card_body">
                    <!-- php code -->
                </div>
            </div>
        </div>
    </div>


    <!-- add image model -->
    <div class="modal fade" id="addSliderModel" tabindex="-1" role="dialog" aria-labelledby="addSliderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <form id="addSliderModel_form" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Add A New Silder Image </label>
                        <input type="file" name="newSlide" id="newSlide" class="form-control shadow-none" accept=".jpg,.png,.jpeg,.webp" required>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
                        <button type="submit" id="submit" class="btn btn-success shadow-none me-3"> Add Image</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>


    <!-- home page room type image slider -->
    <div class="col-lg-10 ms-auto p-4 my-3" id="dashboard-room-content">
        <div class="border-0 shadow">
            <div class="card-body pb-3">
                <div class="card-title">
                    <h3>Home Page Room Type Slider Image</h3>
                </div>
                <hr>
                <div class="row pt-2" id="home_room_type">
                    <!-- php code -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addRoomTypeModel" tabindex="-1" role="dialog" aria-labelledby="addRoomTypeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <form id="addRoomTypeModel_form" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Room Type</label>
                        <input type="text" name="room_type"  id="room_type" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Room Image </label>
                        <input type="file" name="room_type_image" id="room_type_image" class="form-control shadow-none" accept=".jpg,.png,.jpeg,.webp" required>
                    </div>
                    <div class="modal-footer" >
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
                        <button type="submit" id="submit" class="btn btn-success shadow-none me-3"> Add new Room type</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <script>
        //home page main slider
        $(document).ready(function(){
            load_data('all');
            function load_data(query){
                $.ajax({
                    url:'ajax/slider-curd.php',
                    method:'POST',
                    data:{query:query},
                    success:function(data){
                        $("#home_slider_card_body").html(data);
                    }
                });
            }

            // remove silder image
            $(document).on('click','.remove_home_slider_img',function(e){
                e.preventDefault();
                var url=$(this).attr('href');
                console.log(url);
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You wan't To Delete This image from Home slider!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href=url;
                        load_data('all');
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                    }
                    else{
                        window.location.href='/hotel-php-website/admin/dashboard.php';
                    }
                });
            })
            
            $(document).on('submit','#addSliderModel_form',function(e){
                e.preventDefault();
                console.log('inside');
                $.ajax({
                    url:'ajax/slider-curd.php',
                    method:'POST',
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(data){
                        $('#addSliderModel').modal('toggle');
                        $('#newSlide').val("");
                        <?php timerAlertForScript("success","New Slider Image Added Succesfully",1500,'center'); ?>
                        load_data('all');
                    },
                    error:function(){
                        <?php simpleAlertForScript('ERROR!',"Opration Failed","error");?>
                    }
                })
            })

        })
    </script>


    <script>
        // home page room type slider
        $(document).ready(function(e){
            load_room_type('all');
            function load_room_type(query) {
                $.ajax({
                    url:'ajax/slider-curd.php',
                    method:'POST',
                    data:{room_type:query},
                    success:function(data){
                        $("#home_room_type").html(data);
                    }
                });
            }

            $(document).on('click','.remove_room_type',function(e){
                e.preventDefault();
                var url=$(this).attr('href');
                console.log(url);
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You wan't To Delete This Room Type Permanantly!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href=url;
                        load_room_type('all');
                        setInterval(() => {
                            location.reload(true);
                        }, 2000);
                    }
                    else{
                        window.location.href='/hotel-php-website/admin/dashboard.php';
                    }
                });
            })


            $(document).on('submit','#addRoomTypeModel_form',function(e){
                e.preventDefault();
                console.log('inside');
                $.ajax({
                    url:'ajax/slider-curd.php',
                    method:'POST',
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(data){
                        $('#addRoomTypeModel').modal('toggle');
                        $('#room_type').val("");
                        $('#room_type_image').val("");
                        $('#room_type_desc').val("");
                        <?php timerAlertForScript("success","New Room Type Added Succesfully",1500,'center'); ?>
                        load_room_type('all');
                    },
                    error:function(){
                        <?php simpleAlertForScript('ERROR!',"Opration Failed","error");?>
                    }
                })
            })


        })
    </script>


    <script>
        //edit title
        $(document).on('click','.editTitle',function(e){
            e.preventDefault();
            if($('.txttitle').attr('disabled')){
                $('.txttitle').removeAttr('disabled');
                $('.txttitle').focus()
            }
            else{
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You wan't To Rename Your Website ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Rename It!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // $("form[name=frmtitle]").submit();
                        $.ajax({
                            url:'ajax/title-curd.php',
                            method:'post',
                            data:$("form[name=frmtitle]").serialize(),
                            success:function(data){
                                $('.txttitle').attr('disabled',true)
                                <?php simpleAlertForScript("success !!","Title Updates Succesfully",'success'); ?>
                            }
                        })
                    }
                    else{
                        $('.txttitle').attr('disabled',true)
                    }
                });
            }
        })   
    </script>


    <script>
        //edit caption
        $(document).on('click','.editCaption',function(e){
            e.preventDefault();
            if($('.slider_md_msg').attr('disabled') || $('.slider_lg_msg').attr('disabled') || $('.slider_sm_msg').attr('disabled')){
                $('.slider_md_msg').removeAttr('disabled');
                $('.slider_lg_msg').removeAttr('disabled');
                $('.slider_sm_msg').removeAttr('disabled');
                $('.slider_md_msg').focus()
            }
            else{
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You wan't To Update Caption ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes,update it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // $("form[name=frmtitle]").submit();
                        $.ajax({
                            url:'ajax/title-curd.php',
                            method:'post',
                            data:$("form[name=frmcaption]").serialize(),
                            success:function(data){
                                $('.slider_md_msg').attr('disabled',true);
                                $('.slider_lg_msg').attr('disabled',true);
                                $('.slider_sm_msg').attr('disabled',true);
                                <?php simpleAlertForScript("success !!","caption Updates Succesfully",'success'); ?>
                            }
                        })
                    }
                    else{
                        $('.slider_md_msg').attr('disabled',true);
                        $('.slider_lg_msg').attr('disabled',true);
                        $('.slider_sm_msg').attr('disabled',true);
                    }
                });
            }
        })
    </script>
    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>