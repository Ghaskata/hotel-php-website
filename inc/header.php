<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand ms-4 fw-bold fs-3 h-font" href="index.php"><?php echo $websiteTitle; ?></a>
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
          <?php
            if($login){
              // echo $_SESSION['userId'];
              echo '<a class="btn btn-outline-dark btnLogout shadow-none me-lg-3 py-auto me-2 px-3" href="logout.php">
                      LogOut
                    </a>
                    <a href="profile.php" style="text-decoration:none;" class="btn shadow-none me-lg-3 me-2"><i class="fa fa-user-circle fs-2 p-0"></i></a>';
            }
            else{
              echo '<button type="button" class="btn btn-outline-dark btnlogin shadow-none me-lg-3 me-2 px-3" data-bs-toggle="modal" data-bs-target="#LoginModal">
                      Login
                    </button>
                    <button type="button" class="btn btn-outline-dark btnregi shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#RegistreModal">
                      Registre
                    </button>';
            }
          ?>
        </div>
      </ul>
    </div>
  </div>
</nav>



<!-- login  Modal -->
<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <form method="POST" id="LoginForm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title d-flex align-items-center fs-5"><i class="fa-solid fa-circle-user fs-3 me-3"></i> Login </h1>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label"> username </label>
          <input type="text" class="form-control shadow-none" name="LoginName" required>
        </div>
        <div class="mb-3">
          <label class="form-label">password</label>
          <input type="password" class="form-control shadow-none" name="LoginPass" required>
        </div>
        <div class="mb-3 d-flex align-items-center justify-content-between" >
          <button type="submit" class="btn btn-outline-success shadow-none me-3"> LOGIN </button>
          <a onclick='$(".btnregi").click();' class="text-secondary text-decoration-none"> Create New Account ? </a>
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
                <input name="name" type="text" class="form-control shadow-none" pattern="[A-Za-z].{3,}" required>
              </div>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Username </label>
                <input name="uname" type="text" class="form-control shadow-none" required>
              </div>
            </div>
          
          
            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Phone </label>
                <input name="phone" type="text" class="form-control shadow-none" pattern="[1-9]{1}[0-9]{9}" required>
              </div>
            </div>         
            <div class="col-md-6 p-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Email </label>
                <input name="email" type="Email" class="form-control shadow-none" required>
              </div>
            </div>
            
            
            <div class=" col-md-12 ps-0 mb-3">
              <label class="form-label"> Address </label>
              <div class="form-floating ">
                <textarea name="address" class="form-control shadow-none" placeholder="Leave a comment here" rows="1" required></textarea>
              </div>
            </div>
          
         

            <div class="col-md-6 ps-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Create Password </label>
                <input name="pass" type="password" class="form-control shadow-none" pattern=".{4,}" required>
              </div>
            </div>
            <div class="col-md-6 p-0 mb-3">
              <div class="mb-3">
                <label class="form-label"> Confirm Password </label>
                <input name="cpass" type="password" class="form-control shadow-none" required>
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


<script>
  $(document).ready(function(){
    //register 
    $("#register-form").submit(function(e){
      e.preventDefault();
      $.ajax({
        url:'./Admin/ajax/registation-login-curd.php',
        method:'POST',
        data:$('#register-form').serialize(),
        success:function(data){
          if(data=='password not match'){
              <?php simpleAlertForScript('Warning!',"Password And Confirm Password should be same","warning");?>
          }
          else if(data=="User Is Alredy Exist"){
              <?php simpleAlertForScript('Error!',"UserName is Alrady Exist","error");?>
          }
          else if(data=="user created"){
              <?php simpleAlertForScript('Success!',"User Ceated Successfully","success");?>
          }
          else{
            console.log(data);
            alert(data);
          }
        },
        error:function(){
          <?php simpleAlertForScript('ERROR!',"Something Wents Wrong","error");?>
        }
      })
    })



    //login
    $("#LoginForm").submit(function(e){
      e.preventDefault();
      $.ajax({
        url:'./Admin/ajax/registation-login-curd.php',
        method:'POST',
        data:$('#LoginForm').serialize(),
        success:function(data){
          if(data=="found"){
            <?php 
              timerAlertForScript('success','Your login in Succesfully',1500,"top-center");?>
              setTimeout(() => {
                location.reload();
              }, 1500);
          }else{
            <?php simpleAlertForScript("User Not exist !","user not found create a new account.","error");?>
          }
        },
        error:function(){
          <?php simpleAlertForScript('ERROR!',"Something Wents Wrong","error");?>
        }
      })
    })

  })
</script>
