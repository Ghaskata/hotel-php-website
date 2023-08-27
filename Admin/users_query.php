<?php
    require('inc/func.php');
    require('inc/db_conn.php');
    adminLogin();
    if (isset($_GET['del'])) {
        if ($_GET['del']=="all") {
            $sql="DELETE FROM `user_query`";
            if (mysqli_query($con,$sql)) {
                alert("success","All Data Deleted!");
            }
            else{
                alert("error","Opration Failed!");
            }
        }
        else{
            $sql="DELETE FROM `user_query` WHERE `sr_no`=".$_GET['del'];
            if (mysqli_query($con,$sql)) {
                alert("success","Data Deleted!");
                // simpleAlert('Success!',"Message is deleted succesfully","success");
            }
            else{
                alert("error","Opration Failed!");
                // simpleAlert('ERROR!',"Someting Went's Wrong","error");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <title>Admin Panel - Users Queries</title>
</head>
<body>
    <?php require('inc/header.php'); ?>
    <div class="col-lg-10 ms-auto p-4" id="dashboard-main-content">
        <h3 class="mb-1 ms-2 mt-2">USER QUERIES</h3>

        <div class="border-0 shadow-sm">
            <div class="card-body">

                <div class="mb-4 text-end me-2">
                    <a class="btn btn-lg btn-danger" href="?del=all">
                        <i class="fa fa-trash me-2"></i>Delete All</a>
                </div>

                <div class="table-responsive-md" style="height:50vh;overflow-y: scroll;">
                    <table class="table table-hover">
                        <thead class="sticky-top">
                            <tr class="bg-dark text-light">
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col" width="20%">Subject</th>
                                <th scope="col" width="30%">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql="SELECT * FROM `user_query` ORDER BY sr_no DESC";
                                $res=mysqli_query($con,$sql);
                                if($res->num_rows>0){
                                    $i=1;
                                    while ($row=mysqli_fetch_assoc($res)) {
                                        $delete="<a href='?del=$row[sr_no]' class='btn btn-sm btn-danger rounded-pill'>Delete</a>";
                                        echo<<<datarow
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[email]</td>
                                                <td>$row[subject]</td>
                                                <td>$row[message]</td>
                                                <td>$row[date]</td>
                                                <td>$delete</td>
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