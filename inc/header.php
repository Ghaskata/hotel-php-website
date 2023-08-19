<?php 
require('Admin/inc/db_conn.php');
require('Admin/inc/func.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand ms-4 fw-bold fs-3 h-font" href="index.php">TAJ HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item me-3">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <div class="d-flex" role="search">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-success shadow-none me-lg-3 me-2 px-3" data-bs-toggle="modal" data-bs-target="#LoginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-success shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#RegistreModal">
            Registre
          </button>
        </div>
      </ul>
    </div>
  </div>
</nav>



<!-- login  Modal -->
<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <form method="POST">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title d-flex align-items-center fs-5"><i class="fa-solid fa-circle-user fs-3 me-3"></i> Login </h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label"> username </label>
          <input type="text" class="form-control shadow-none">
        </div>
        <div class="mb-3">
          <label class="form-label">password</label>
          <input type="password" class="form-control shadow-none">
        </div>
        <div class="mb-3 d-flex align-items-center justify-content-between" >
          <button type="submit" class="btn btn-outline-success shadow-none me-3"> LOGIN </button>
          <a href="#" class="text-secondary text-decoration-none"> Forgot password ? </a>
        </div>
      </div>
    </div>
  </div>
  </form>
  
</div>

<!-- register  Modal -->
<div class="modal fade" id="RegistreModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <form id="register-form" method="POST">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title d-flex align-items-center fs-5">
          <i class="fa-solid fa-user-plus fs-3 me-3"></i> Registration 
        </h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <div>
        <span class="badge bg-light text-dark"> Note : fill all fileds be carefully. </span>
        </div> -->
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Name </label>
                <input name="name" type="text" class="form-control shadow-none" required>
              </div>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Username </label>
                <input name="uname" type="text" class="form-control shadow-none" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Phone </label>
                <input name="phone" type="number" class="form-control shadow-none" required>
              </div>
            </div>         
            <div class="col-md-6 p-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Email </label>
                <input name="email" type="Email" class="form-control shadow-none" required>
              </div>
            </div>
          </div>  
          <div class="row">  
            <div class=" col-md-12 ps-0 mb-3">
              <label class="form-label"> Address </label>
              <div class="form-floating ">
                <textarea name="address" class="form-control shadow-none" placeholder="Leave a comment here" rows="1" required></textarea>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Date Of Birth </label>
                <input name="dob" type="date" class="form-control shadow-none" required>
              </div>
            </div>
            <div class="col-md-6 p-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Pincode </label>
                <input name="pincode" type="number" class="form-control shadow-none" required>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Create Password </label>
                <input name="pass" type="password" class="form-control shadow-none">
              </div>
            </div>
            <div class="col-md-6 p-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Confirm Password </label>
                <input name="cpass" type="password" class="form-control shadow-none" required>
              </div>
            </div>
          </div>
          
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success shadow-none me-3" name="register"> Register </button>
        </div>
      </div>
    </div>
    </div>
  </div>
  </form>
</div>


