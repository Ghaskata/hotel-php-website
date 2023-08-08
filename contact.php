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

<div>
    <div class="row my-4 mx-4">
        <div class="col-md-6 col-lg-6 col-12 bg-light">
            <img src="images\image_6.jpg" alt="" width="100%" class="">
        </div>
        <div class="col-md-6 col-lg-6 col-12 bg-white">
            <div class="container w-75 py-5">
                <h2 class="h-font text-center">Send Your Enquiries</h2>
                <form>
                    <div class="form-group mt-5">
                        <label for="uname">Full Name</label>
                        <input type="text" id="uname" class="input form-control shadow-none">
                    </div>
                    <div class="form-group mt-4">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="input form-control shadow-none">
                    </div>
                    <div class="form-group mt-4">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" class="input form-control shadow-none">
                    </div>
                    <div class="form-group mt-4">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="input form-control shadow-none">
                            <option value=""></option>
                            <option value="Rooms">Rooms</option>
                            <option value="Book Hotel For Event">Book Hotel For Event</option>
                            <option value="Partner With Us">Partner With Us</option>
                            <option value="Careers">Careers</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="msg">Message</label>  
                        <input type="text" id="msg" class="input form-control shadow-none">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->


    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>