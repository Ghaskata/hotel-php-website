<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('inc/links.php');?>
</head>
<body style="height: 500px;width: 1000px;margin: auto;">
    <div class="container shadow px-5 py-4 w-100" id="recipt">
        <div class="mb-1">
            <h5 style="margin-bottom: 0;">Reciept No : <span>djs</span></h5>
            <h5 style="margin-bottom: 0;">Reciept Date : <span>djs</span></h5>
        </div>
        <div class="container-fluid bg-light">
            <h1 class=" text-center p-3">TAJ HOTEL</h1>
        </div>
        <!-- <div class="row">
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
        </div> -->
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

    </div>
    
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