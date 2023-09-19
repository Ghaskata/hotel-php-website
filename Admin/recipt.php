<?php
    require('inc/func.php');
    require('inc/db_conn.php');
    $login=userLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <?php
        if(isset($_GET['roomid'])&& isset($_GET['uid'])){
            $q="SELECT * FROM `rooms` WHERE `id`=".$_GET['roomid'];
            $res=mysqli_query($con,$q);
            if ($res->num_rows==1) {
                $row=mysqli_fetch_assoc($res);
                $q1="SELECT * FROM `usertbl` WHERE `id`=".$_GET['uid'];
                $res1=mysqli_query($con,$q1);
                $q2="SELECT * FROM `tblbooking` WHERE `rid`=".$_GET['roomid'];
                $res2=mysqli_query($con,$q2);
                $row2=mysqli_fetch_assoc($res2);
                if ($res1) {
                    $row1=mysqli_fetch_assoc($res1);
    ?>
<div id="recipt" style="width: 90%;margin: auto;border: 1px solid grey; padding:15px 30px;">
    <div class="mb-1">
        <h3 style="margin-bottom: 0;">Reciept No : <span><?=$row2['id']?></span></h3>
        <h3 style="margin-bottom: 0;">Reciept Date : <span><?=date('d/m/Y')?></span></h3>
    </div>
    <div style="width: 100%;background: rgba(128, 128, 128, 0.281);margin: 0;padding: 0;">
        <h1 style="text-align: center; padding: 15px;">TAJ HOTEL</h1>
    </div>
    <div style="display: grid;grid-template-columns: 1fr 1fr 2fr;">
        <div >
            <div style="margin-top: 10px;margin-left: 20px;">
                <h3 style="margin-bottom: 0;">Name </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$row1['name']?></p>

                <h3 style="margin-bottom: 0;">Phone Number </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$row1['phone']?></p>

                <h3 style="margin-bottom: 0;">Email </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$row1['email']?></p>

                <h3 style="margin-bottom: 0;">Payment Method </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;">By Cash</p>
            </div>
        </div>
        
        <div>
            <div style="margin-top: 10px;margin-left: 20px;">
                <h3 style="margin-bottom: 0;">Room No</h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$row['area']?></p>

                <h3 style="margin-bottom: 0;">Room Type </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$row['name']?></p>

                <h3 style="margin-bottom: 0;">Check in Date </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$_GET['checkin']?></p>

                <h3 style="margin-bottom: 0;">Checkout Date </h3>
                <p style="font-size: 1.2rem;margin-top: 5px;"><?=$_GET['checkout']?></p>
            </div>
        </div>
        <div>
            <div style="display: flex;justify-content: space-between;margin:0px 10px;align-items: end;">
                <h3>Price Per Night (Rs.)</h3>
                <p style="font-size: 1.2rem;margin-top: 5px;" class="fs-5"><?=$row['price']?></p>
            </div>
            <div style="display: flex;justify-content: space-between;margin:0px 10px;align-items: end;">
                <h3>Total No Of Night</h3>
                <h3>( × )</h3>
                <p style="font-size: 1.2rem;margin-top: 5px;" class="fs-5"><?=$row2['total_day']?></p>
            </div>
            <hr>
            <div style="display: flex;justify-content: space-between;margin:0px 10px;align-items: end;">
                <h3>Total Amount(Rs.)</h3>
                <h2 style="margin: 10px;"><?php echo $row['price']*$row2['total_day']?> /-</h2>
            </div>
            <hr style="width: 120px;margin-left: auto;margin-right: 0;">
            <hr style="width: 120px;margin-left: auto;margin-right: 0;">
            <div style="display: flex;justify-content: end;margin-top: 40px;">
                <button style="background:rgb(9, 87, 9);color: aliceblue;padding: 10px 30px;font-size: large;border: 0;" onclick="generateReciept()">print</button>
                <div id="download_link"></div>
            </div>
        </div>
    </div>

</div>

    <?php
                }else{
                    echo "no";
                }
            }else{
                echo "no";
            }
        }
    ?>
    
    <!-- <div id="recipt" style="width: 100%;border: 1px solid grey; padding:40px 50px;">
        <div class="mb-1">
            <h5 style="margin-bottom: 0;">Reciept No : <span>djs</span></h5>
            <h5 style="margin-bottom: 0;">Reciept Date : <span>djs</span></h5>
        </div>
        <div class="container-fluid bg-light">
            <h1 class=" text-center p-3">TAJ HOTEL</h1>
        </div>
        ////////// <div class="row">
            <div class="row col-lg-7 col-md-12">
                <div class="col-7">
                    <div class="mt-2">
                        <h5 style="margin-bottom: 0;">Name </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Phone Number </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Email </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Payment Method </h5>
                        <p>By Cash</p>
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="mt-2">
                        <h5 style="margin-bottom: 0;">Room No </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Room Type </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Check in Date </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Checkout Date </h5>
                        <p>djs</p>
                    </div>
                </div>
                <hr>
                <div class="12">
                    <div class="px-3 d-flex justify-content-between">
                        <h5>Price Per Night (Rs.)</h5>
                        <p class="fs-5">2000</p>
                    </div>
                    <div class="px-3 d-flex justify-content-between">
                        <h5>Total No Of Night</h5>
                        <h5>( × )</h5>
                        <p class="fs-5">3</p>
                    </div>
                    <hr class="w-25 mt-1 ms-auto me-0">
                    <div class="px-3 d-flex justify-content-between">
                        <h5>Total Amount(Rs.)</h5>
                        <h4>6000</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-0">
                <img src="../images/hotell All.png" width="100%" alt="">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" onclick="generateReciept()">generateReciept</button>
                    <div id="download_link"></div>
                </div>
            </div>
        </div> //////
        <div class="row">
            <div class="row col-lg-12 col-md-12">
                <div class="col-7">
                    <div class="mt-2 ms-5">
                        <h5 style="margin-bottom: 0;">Name </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Phone Number </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Email </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Payment Method </h5>
                        <p>By Cash</p>
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="mt-2 ms-5">
                        <h5 style="margin-bottom: 0;">Room No </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Room Type </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Check in Date </h5>
                        <p>djs</p>
    
                        <h5 style="margin-bottom: 0;">Checkout Date </h5>
                        <p>djs</p>
                    </div>
                </div>
                <hr>
                <div class="12">
                    <div class="px-3 d-flex justify-content-between">
                        <h5>Price Per Night (Rs.)</h5>
                        <p class="fs-5">2000</p>
                    </div>
                    <div class="px-3 d-flex justify-content-between">
                        <h5>Total No Of Night</h5>
                        <h5>( × )</h5>
                        <p class="fs-5">3</p>
                    </div>
                    <hr class="w-25 mt-1 ms-auto me-0">
                    <div class="px-3 d-flex justify-content-between">
                        <h5>Total Amount(Rs.)</h5>
                        <h4>6000</h4>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-danger" onclick="generateReciept()">generateReciept</button>
                        <div id="download_link"></div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->
    
    <!-- <script>
        function generateReciept(){
            const reciptHTML=`
            <html>
                <head>
                    <title>Recipettt</title>
                </head>
                <body>
                    <div class="container shadow w-75 px-5 py-4">
                        <div class="mb-1">
                            <h5 style="margin-bottom: 0;">Reciept No : <span>djs</span></h5>
                            <h5 style="margin-bottom: 0;">Reciept Date : <span>djs</span></h5>
                        </div>
                        <div class="container-fluid bg-light">
                            <h1 class=" text-center p-3">TAJ HOTEL</h1>
                        </div>
                        <div class="row">
                            <div class="row col-7">
                                <div class="col-7">
                                    <div class="mt-2">
                                        <h5 style="margin-bottom: 0;">Name </h5>
                                        <p>djs</p>
                    
                                        <h5 style="margin-bottom: 0;">Phone Number </h5>
                                        <p>djs</p>
                    
                                        <h5 style="margin-bottom: 0;">Email </h5>
                                        <p>djs</p>
                    
                                        <h5 style="margin-bottom: 0;">Payment Method </h5>
                                        <p>By Cash</p>
                                    </div>
                                </div>
                                
                                <div class="col-5">
                                    <div class="mt-2">
                                        <h5 style="margin-bottom: 0;">Room No </h5>
                                        <p>djs</p>
                    
                                        <h5 style="margin-bottom: 0;">Room Type </h5>
                                        <p>djs</p>
                    
                                        <h5 style="margin-bottom: 0;">Check in Date </h5>
                                        <p>djs</p>
                    
                                        <h5 style="margin-bottom: 0;">Checkout Date </h5>
                                        <p>djs</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="12">
                                    <div class="px-3 d-flex justify-content-between">
                                        <h5>Price Per Night (Rs.)</h5>
                                        <p class="fs-5">2000</p>
                                    </div>
                                    <div class="px-3 d-flex justify-content-between">
                                        <h5>Total No Of Night</h5>
                                        <h5>( × )</h5>
                                        <p class="fs-5">3</p>
                                    </div>
                                    <hr class="w-25 mt-1 ms-auto me-0">
                                    <div class="px-3 d-flex justify-content-between">
                                        <h5>Total Amount(Rs.)</h5>
                                        <h4>6000</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <img src="../images/hotell All.png" width="100%" alt="">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-danger" onclick="generateReciept()">generateReciept</button>
                                    <div id="download_link"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </body>
            </html>`;

            const file=new File([reciptHTML],'recipt1.html',{type:'text/html'});

            const downloadlink=document.createElement('a')
            downloadlink.href=URL.createObjectURL(file)
            downloadlink.download='recipt1.html'
            downloadlink.innerText="download reciept"
            document.getElementById('download_link').appendChild(downloadlink)
        }
    </script> -->
    <script>
        function generateReciept(){
            window.print();
            window.close()
        }
    </script>
</body>
</html>