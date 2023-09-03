<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title>TJ Hotel - About US</title>
    <style>
        .about-card:hover{
            border-top-color: aqua !important;
            transform: scale(1.09);
            transition: all 0.3s;
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
    <h1 class="h-font text-center">ABOUT US</h1>
    <div class="bg-dark h-line mb-4"></div>
    <p class="text-center mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, eaque nam similique provident iure rerum aspernatur doloremque, accusantium, atque quaerat aperiam voluptatem officia ipsum ab ut obcaecati enim ipsa eius possimus. Placeat expedita dolore exercitationem vero, autem architecto eaque amet provident quasi! Blanditiis amet sunt adipisci deserunt ab odio iusto!
    </p>
</div>

<div class="container-fluid mx-auto">
    <div class="container-fluid mt-5 mb-5">
      <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-4 border-top border-secondary text-center about-card">
                  <img src="images\about\a1.jpg" width="70px">
                  <h4 class="mt-3">100+ Rooms</h4>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-4 border-top border-secondary text-center about-card">
                  <img src="images\about\a2.jpg" width="70px">
                  <h4 class="mt-3">200+ Customer</h4>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-4 border-top border-secondary text-center about-card">
                  <img src="images\about\a3.png" width="70px">
                  <h4 class="mt-3">150+ Reviews</h4>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 px-4">
              <div class="bg-white rounded shadow p-4 border-4 border-top border-secondary text-center about-card">
                  <img src="images\about\a4.png" width="70px">
                  <h4 class="mt-3">250+ Staff</h4>
              </div>
          </div>
      </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-12 mb-4  order-md-1 order-lg-1 order-2">
                <h2 class="mb-5 text-center">Lorem ipsum dolor sit amet.</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio blanditiis nesciunt dolores nam praesentium exercitationem nihil deleniti suscipit eligendi, quis, sit repellendus excepturi tempora quibusdam, iusto laboriosam velit laborum cumque. Sunt, vel asperiores, quos iste ea ut impedit quis, eum accusamus eos itaque quaerat quidem vitae debitis numquam explicabo commodi aut sint reprehenderit? Sit, odit praesentium aspernatur voluptate magni eos provident laboriosam ab explicabo iure eveniet dignissimos? Excepturi enim minus unde praesentium dolor veritatis, non neque blanditiis corrupti autem at ipsam quasi hic fugit fugiat delectus officia tempora accusamus adipisci voluptates. Quia culpa unde totam voluptates expedita dolorum fugiat molestias laborum pariatur quo temporibus amet soluta quaerat sunt in ducimus vitae necessitatibus distinctio ab, consequuntur esse quasi reprehenderit eos voluptatem! Pariatur cum ipsa dolores fuga delectus odio reprehenderit praesentium mollitia nesciunt assumenda nulla vitae blanditiis repudiandae laborum temporibus, incidunt sit neque omnis laudantium exercitationem rem magnam provident. Odit, quod ex.
                </p>
            </div>
            <div class="col-lg-6 col-12 mb-5 order-md-2 order-lg-2 order-1 m-0 p-0">
                <img src="images\about\about1.jpg" class="w-100">
            </div>
        </div>
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