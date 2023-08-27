<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>TJ Hotel - Contact</title>
    <style>
    .input{
    border-top: 0;
    border-right: 0;
    border-left: 0;
    border-radius: 0%;
    border-bottom-width: 2px;
    }
    .input:focus{
        border-bottom-color: #2ec1ac;
        transition: all 0.5s;
    }
    #contact-img{
        border-top-left-radius: 60px;
        border-bottom-left-radius: 60px;
    }
    @media screen and (max-width:992px) {
        #contact-img{
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            border-bottom-left-radius: 0;
        }
    }
    .contact-card:hover{
        border-top-color: rgb(12, 184, 184) !important;
        transform: scale(1.09);
        transition: all 0.5s;
    }
    </style>
</head>


<body class="bg-light">
<!-- navbar -->
<?php
  require('./inc/header.php');
?>
<!-- navbar end -->

<div class="my-5 mx-4">
    <h1 class="h-font text-center">CONTACT US</h1>
    <div class="bg-dark h-line mb-4"></div>
</div>

<div class="container-fluid px-5 mx-auto">
    <div class="row m-auto">
        <div class="col-lg-4 col-12 mb-4 m-auto">
            <div class="m-1 shadow px-3 py-2 rounded border-top border-4 border-secondary contact-card">
                <h3 class="my-3">Surat Branch</h3>
                <h5>Phone No : <span class="fs-6 fw-light">9978564534</span> </h5>
                <h5>Email : <span class="fs-6 fw-light">suratTAJhotel@gmail.com</span> </h5>
                <h5>Address : <span class="fs-6 fw-light">Taj Hotel , Surat - Mumbai Haighway Rd, GIDC Bhat , Surat , Gujarat 394520</span></h5>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-4 m-auto">
            <div class="m-1 shadow px-3 py-2 rounded border-top border-4 border-secondary contact-card">
                <h3 class="my-3">Mumbai Branch</h3>
                <h5>Phone No : <span class="fs-6 fw-light">9978564534</span> </h5>
                <h5>Email : <span class="fs-6 fw-light">suratTAJhotel@gmail.com</span> </h5>
                <h5>Address : <span class="fs-6 fw-light">Taj Hotel , Surat - Mumbai Haighway Rd, GIDC Bhat , Surat , Gujarat 394520</span></h5>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-4 m-auto">
            <div class="m-1 shadow px-3 py-2 rounded border-top border-4 border-secondary contact-card">
                <h3 class="my-3">London Branch</h3>
                <h5>Phone No : <span class="fs-6 fw-light">9978564534</span> </h5>
                <h5>Email : <span class="fs-6 fw-light">suratTAJhotel@gmail.com</span> </h5>
                <h5>Address : <span class="fs-6 fw-light">Taj Hotel , Surat - Mumbai Haighway Rd, GIDC Bhat , Surat , Gujarat 394520</span></h5>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="row my-4 mx-4">
        <div class="col-lg-6 col-12 bg-light p-0">
            <img src="images\food-1.jpg" alt="" width="100%" id="contact-img">
        </div>
        <div class="col-lg-6 col-12 bg-white shadow">
            <div class="container w-75 pt-5 py-3">
                <h2 class="h-font text-center fs-1">Reach Out To Us</h2>
                <form method="POST">
                    <div class="form-group mt-5">
                        <label class="fs-5" for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="input form-control shadow-none" required>
                    </div>
                    <div class="form-group mt-4">
                        <label class="fs-5" for="email">Email</label>
                        <input type="email" id="email" name="email" class="input form-control shadow-none" required>
                    </div>
                    <div class="form-group mt-4">
                        <label class="fs-5" for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="input form-control shadow-none" required>
                    </div>
                    <div class="form-group mt-4 mb-5">
                        <label class="fs-5" for="msg">Message</label>  
                        <input type="text" id="msg" name="msg" class="input form-control shadow-none" required>
                    </div>
                    <button type="submit" name="send" class="btn btn-primary px-4 py-2 fs-5 mt-4 rounded-pill">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['send'])) {
    $name=addslashes($_POST['name']);
    $email=addslashes($_POST['email']);
    $subject=addslashes($_POST['subject']);
    $msg=addslashes($_POST['msg']);


    $sql="INSERT INTO `user_query`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$msg')";
    $res=mysqli_query($con,$sql);
    if ($res) {
        // alert("success","Your Message has been Send Succesfully");
        timerAlert('success','Your Message Has Been send Succesfully',1500);
    }
    else{
        simpleAlert('ERROR!',"Someting Went's Wrong","error");
    }
}   
?>


<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->


    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>