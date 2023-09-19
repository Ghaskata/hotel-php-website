<?php
    require('inc/func.php');
    require('inc/db_conn.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Admin Panel - Booked Rooms</title>
</head>

<body>

    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <h3 class="mb-1 ms-2 mt-2">Booked Rooms</h3>

        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="table-responsive-md" style="height:65vh;overflow-y: scroll;">
                    <table class="table table-hover text-center">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">No</th>
                                <th scope="col">Check-In</th>
                                <th scope="col">Check-Out</th>
                                <th scope="col">User Id</th>
                                <th scope="col">Room Id</th>
                                <th scope="col">Booking Date</th>
                                <th scope="col">Total Days</th>
                            </tr>
                        </thead>
                        <tbody class="animate__animated animate__fadeIn">
                            <?php
                                $sql="SELECT * FROM `tblbooking` ORDER BY id DESC";
                                $res=mysqli_query($con,$sql);
                                if($res->num_rows>0){
                                    $i=1;
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        echo<<<datarow
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[checkin]</td>
                                                <td>$row[checkout]</td>
                                                <td>$row[uid]</td>
                                                <td>$row[rid]</td>
                                                <td>$row[bookingDate]</td>
                                                <td>$row[total_day]</td>
                                            </tr>
datarow;
                                        $i++;
                                    }
                                }
                                else{
                                    //no record found
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>