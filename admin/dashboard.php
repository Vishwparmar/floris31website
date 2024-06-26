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

        $result = mysqli_query($con, "SELECT COUNT(booking_id) AS total_bookings FROM booking_order");
        $row = mysqli_fetch_assoc($result);
        $totalBookings = $row['total_bookings'];

        // $current_bookings = mysqli_fetch_assoc(mysqli_query($con, "SELECT
        //     COUNT (CASE WHEN booking_status='booked' AND arrival= 0 THEN 1 END) AS `new bookings`",
        //     COUNT (CASE WHEN booking_status='cancelled' AND refund=0 THEN 1 END) AS `refund bookings`FROM booking_order'"));

        $unread_queries = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) AS `count` FROM `user_queries` WHERE `seen`=0"));

        // $unread_reviews = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUUNT(sr_no) AS `count` FROM `rating_reviews` WHERE `seen`=0"));

        $current_users = mysqli_fetch_assoc(mysqli_query($con, "SELECT
            COUNT(user_id) AS `total`,
            COUNT(CASE WHEN `is_verified` =0 THEN 1 END) AS `unverified`
            FROM `registered_users`"));



        $total_queries = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(sr_no) AS `count`
         FROM `user_queries`  "));

        $total_new_reg = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(user_id) AS `count`
         FROM `registered_users` "));


        // Fetch total count of currently logged-in users
        $logged_in_users_query = mysqli_query($con, "SELECT COUNT(*) AS total_logged_in_users FROM `registered_users` WHERE `is_logged_in` = 1");
        $logged_in_users_row = mysqli_fetch_assoc($logged_in_users_query);
        $total_logged_in_users = $logged_in_users_row['total_logged_in_users'];

        // Check if user_id is set before proceeding
        if(isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            $query = "UPDATE `registered_users` SET `is_logged_in` = 1 WHERE `user_id` = " . mysqli_real_escape_string($con, $user_id);

            mysqli_query($con, $query);
        } else {
            
            echo "Error: user_id is not set.";
        }

        // Function to get total assigned rooms count
        function getTotalAssignedRoomsCount() {
            global $con;
            
            $query = "SELECT COUNT(*) AS total_assigned_rooms FROM `booking_details` WHERE room_no IS NOT NULL";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            
            return $row['total_assigned_rooms'];
        }

        // Count total assigned rooms
        $total_assigned_rooms = getTotalAssignedRoomsCount();

   
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
                    <div class="col-md-6 md-4">
                        <a href="bookings.php" class="text-decoration-none">
                        <div class="card text-center text-success p-3">
                            <h6>Total Assigned Rooms</h6>
                            <h1 class="mt-2 md-0"><?php echo $total_assigned_rooms; ?></h1>
                        </div>
                        </a>
                    </div>

                    <div class="col-md-6 md-4">
                        <a href="user_queries.php" class="text-decoration-none">
                            <div class="card text-center text-primary p-3">
                                <h6>User Queries</h6>
                                <h1 class="mt-2 md-0"><?php echo $unread_queries['count'] ?></h1>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5>Booking Analytics</h5>
                    <select class="form-select shadow-none bg-light w-auto" onchange="booking_analytics(this.value)">
                        <option value="1">Past 30 Days</option>
                        <option value="2">Past 90 Days</option>
                        <option value="3">Past 1 Year</option>
                        <option value="4">All time</option>
                    </select>
                </div>
                <div class="row justify-content-center mb-4" >
                    <div class="col-md-6 md-4">
                            <div class="card text-center text-success p-3">
                                <h6>Total Booking</h6>
                                <h1 class="mt-2 md-0"><?php echo $totalBookings; ?></h1>
                            </div>
                    </div>


                <div class="d-flex align-items-center justify-content-between mb-3">
                <h5><br>User & Queries Analytics</h5>
                    <select class="form-select shadow-none bg-light w-auto" onchange="user_analytics(this.value)">
                        <option value="1">Past 30 Days</option>
                        <option value="2">Past 90 Days</option>
                        <option value="3">Past 1 Year</option>
                        <option value="4">All time</option>
                    </select>
                </div>

                <div class="row mb-4">
                        <div class="col-md-6 md-4">
                            <div id="new_registration_count" class="card text-center text-success p-3">
                                <h6>New Registration</h6>
                                <h1 class="mt-2 md-0" id="total_new_reg"><?php echo $total_new_reg['count']?></h1>
                            </div>
                        </div>
                    <div class="col-md-6 md-4">
                            <div class="card text-center text-primary p-3">
                                <h6>Queries</h6>
                                <h1 class="mt-2 md-0" id="total_queries"><?php echo $total_queries['count']?></h1>
                            </div>
                    </div>
                    
                </div>

                <div class="container">
                    <h5>Total Logged-in Users</h5>
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-6 md-4">
                            <div class="card text-center text-info p-3">
                                <h6>Total count</h6>
                                <h1 class="mt-2 md-0"><?php echo $total_logged_in_users; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <h5>User</h5>
                <div class="row mb-4">
                    <div class="col-md-6 md-4">
                            <div class="card text-center text-info p-3">
                                <h6>Total User</h6>
                                <h1 class="mt-2 md-0"><?php echo $current_users['total']?></h1>
                            </div>
                    </div>
                    <div class="col-md-6 md-4">
                            <div class="card text-center text-danger p-3">
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