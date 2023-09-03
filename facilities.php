<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>TJ Hotel - Facilities</title>
    <style>
        .faci:hover{
            border-top-color: aqua !important;
            transform: scale(1.09);
            transition: all 0.3s;
        }
        .iconContainer{
            height:70px;
        }
        .iconContainer>.icon{
            width:100%;
            height:80%;
            object-fit:cover;
        }
    </style>
</head>


<body class="bg-light">
<!-- navbar -->
<?php
  require('./inc/header.php');
?>
<!-- navbar end -->

<div class="mt-5 mb-2 mx-4">
    <h1 class="h-font text-center">OUR FACILITIES</h1>
    <div class="bg-dark h-line mb-2"></div>
    <p class="text-center mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque non doloremque quas dolorum, nam pariatur voluptas impedit ducimus rem incidunt veniam accusamus laudantium distinctio iste, enim autem porro optio quasi quia labore maxime. Repellat asperiores voluptatem a, maxime vitae rem rerum repudiandae magnam quaerat blanditiis inventore quas eveniet deserunt fuga.
    </p>
</div>

<div class="container">
    <div class="row">
        <!-- <div class="col-lg-4 col-md-6 px-4 py-4">
            <div class="bg-white border-top border-4 shadow p-4 border-dark rounded faci animate__animated animate__zoomIn">
                <div class="d-flex align-items-center pb-2">
                    <i class="fa fa-wifi" style="font-size: 2rem"></i>
                    <h3 class="m-0 ms-5">WiFi</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor .</p>

            </div>
        </div> -->
        <?php
            $sql="SELECT * FROM `facilities`";
            $res=mysqli_query($con,$sql);
            if($res->num_rows>0){
                $i=1;
                while ($row=mysqli_fetch_assoc($res)) {
                    echo<<<print
                    <div class="col-lg-4 col-md-6 px-3 py-3">
                        <div class="bg-white border-top border-4 shadow p-4 border-dark rounded faci animate__animated animate__zoomIn">
                            <div class="d-flex align-items-center pb-1">
                                <div class="iconContainer">
                                    <img src="images/facilities/$row[icon]" alt="icon" class="icon"/>
                                </div>
                                <h3 class="m-0 ms-5">$row[name]</h3>
                            </div>
                            <p>$row[description]</p>
                        </div>
                    </div>
print;
                    $i++;
                }
            }
            else{
                //no record found
            }
        ?>
    </div>
</div>

<!-- footer -->
<?php
  require('./inc/footer.php');
?>
<!-- footer end -->


    <script src="css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>