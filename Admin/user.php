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
    <title>Admin Panel - User Detail</title>
</head>

<body>

    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <h3 class="mb-1 ms-2 mt-2">User Detail</h3>

        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="table-responsive-md" style="height:65vh;overflow-y: scroll;">
                    <table class="table table-hover text-center">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Account Created On</th>
                            </tr>
                        </thead>
                        <tbody class="animate__animated animate__fadeIn">
                            <?php
                                $sql="SELECT * FROM `usertbl` ORDER BY id DESC";
                                $res=mysqli_query($con,$sql);
                                if($res->num_rows>0){
                                    $i=1;
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        echo<<<datarow
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[uname]</td>
                                                <td>$row[phone]</td>
                                                <td>$row[email]</td>
                                                <td>$row[address]</td>
                                                <td>$row[datetime]</td>
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