<?php

function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin'])&&$_SESSION['adminLogin']==true)){
        header("location:index.php");
    }
}
function userLogin(){
  session_start();
  if(isset($_SESSION['userLogin']) && $_SESSION['userLogin']==true){
      return true;
  }else{
    return false;
  }
}



function alert($type,$msg){
    $bs_class = ($type=="success") ? "alert-success" : "alert-danger" ;
    echo <<<alert
                <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                    <strong class="me-3">$msg</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
alert;
}

function simpleAlert($title,$text,$icon){
    echo<<<simple
    <script>
    Swal.fire({
        title: '$title',
        text: '$text',
        icon: '$icon',
        confirmButtonText: 'Ok'
      });
    </script>
simple;
}

function simpleAlertForScript($title,$text,$icon){
  echo<<<simple
  Swal.fire({
      title: '$title',
      text: '$text',
      icon: '$icon',
      confirmButtonText: 'Ok'
    });
simple;
}

function timerAlert($icon,$title,$timer,$position){
    echo<<<time
    <script>
    Swal.fire({
        position: '$position',
        icon: '$icon',
        title: '$title' ,
        showConfirmButton: false,
        timer: $timer
      });
    </script>
time;
}
function timerAlertForScript($icon,$title,$timer,$position){
  echo<<<time
  Swal.fire({
      position: '$position',
      icon: '$icon',
      title: '$title' ,
      showConfirmButton: false,
      timer: $timer
    });
time;
}

function con_canAlert(){
    echo<<<confirm_cancle
    <script>
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'It has been deleted.',
            'success'
          )
        }
      });
    </script>
confirm_cancle;
}


function deleteAlert(){
    echo<<<time
    <script>
    Swal.fire('are you sure to delete this message ? ',{
        buttons: ['Cancle','Delete Now']
      });
    </script>
time;
}

function redirect($url) {   
    echo "<script type='text/javascript'>
        window.location.href='$url';
    </script>";
}


?>