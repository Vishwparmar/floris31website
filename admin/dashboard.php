<?php 
    require('include/essentials.php');
    require('include/db_config.php');
    adminLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('include/links.php'); ?>
</head>
<body class="bg-light">
    <?php 
        require('include/header.php'); 

        $is_shudtdown = mysqli_fetch_assoc(mysqli_query($con,"SELECT `shutdown` FROM `settings`"));

        // $current_bookings = mysqli_fetch_assoc(mysqli_query($con, "SELECT
        //     COUNT (CASE WHEN booking_status='booked' AND arrival= 0 THEN 1 END) AS `new bookings`",
        //     COUNT (CASE WHEN booking_status='cancelled' AND refund=0 THEN 1 END) AS `refund bookings`FROM booking_order'"));

        $unread_queries = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) AS `count` FROM `user_queries` WHERE `seen`=0"));

        // $unread_reviews = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUUNT(sr_no) AS `count` FROM `rating_reviews` WHERE `seen`=0"));

        $current_users = mysqli_fetch_assoc(mysqli_query($con, "SELECT
            COUNT(user_id) AS `total`,
            COUNT(CASE WHEN `is_verified` =0 THEN 1 END) AS `unverified`
            FROM `registered_users`"));
    ?>



    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">


                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3>DASHBOARD</h3>
                    <?php 
                        if($is_shudtdown['shutdown']){
                            echo<<<data
                            <h6 class="badge bg-danger py-2 px-3 rounded">Shutdown Mode is Active!</h6>
                            data;
                        }
                    ?>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 md-4">
                        <a href="" class="text-decoration-none">
                            <div class="card text-center text-success p-3">
                                <h6>New Booking</h6>
                                <h1 class="mt-2 md-0">5</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 md-4">
                        <a href="" class="text-decoration-none">
                            <div class="card text-center text-warning p-3">
                                <h6>Refund Booking</h6>
                                <h1 class="mt-2 md-0">5</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 md-4">
                        <a href="user_queries.php" class="text-decoration-none">
                            <div class="card text-center text-primary p-3">
                                <h6>User Queries</h6>
                                <h1 class="mt-2 md-0"><?php echo $unread_queries['count'] ?></h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 md-4">
                        <a href="" class="text-decoration-none">
                            <div class="card text-center text-success p-3">
                                <h6>Rating & Review></h6>
                                <h1 class="mt-2 md-0">5</h1>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5>User, Queries, Reviews Analytics</h5>
                    <select class="form-select shadow-none bg-light w-auto" onchange="user_analytics(this.value)">
                        <option value="1">Past 30 Days</option>
                        <option value="2">Past 90 Days</option>
                        <option value="3">Past 1 Year</option>
                        <option value="4">All time< /option>
                    </select>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 md-4">
                            <div class="card text-center text-success p-3">
                                <h6>New Registration</h6>
                                <h1 class="mt-2 md-0" id="total_new_reg">0</h1>
                            </div>
                    </div>
                    <div class="col-md-3 md-4">
                            <div class="card text-center text-primary p-3">
                                <h6>Queries</h6>
                                <h1 class="mt-2 md-0" id="total_queries">5</h1>
                            </div>
                    </div>
                    <div class="col-md-3 md-4">
                            <div class="card text-center text-success p-3">
                                <h6>Reviews</h6>
                                <h1 class="mt-2 md-0">5</h1>
                            </div>
                    </div>
                </div>

                <h5>User</h5>
                <div class="row mb-3">
                    <div class="col-md-3 md-4">
                            <div class="card text-center text-info p-3">
                                <h6>Total User</h6>
                                <h1 class="mt-2 md-0"><?php echo $current_users['total']?></h1>
                            </div>
                    </div>
                    <div class="col-md-3 md-4">
                            <div class="card text-center text-success p-3">
                                <h6>Unverified Users</h6>
                                <h1 class="mt-2 md-0"><?php echo $current_users['unverified']?></h1>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('include/scripts.php'); ?>
    <script src="scripts/dashboard.js"></script>
</body>
</html>