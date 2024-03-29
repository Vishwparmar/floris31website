<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
    <title><?php echo $settings_r['site_title']?> BOOKING STATUS</title>
</head>
<body class="bg-light">
    
<?php 

    require('include/header.php'); 
    
?>


    <div class="container">
        <div class="row">
            <div class="col-12 my-5 mb-3 px-4">
                <h2 class="fw-bold">PAYMENT STATUS</h2>
            </div>

            <?php 

                $booking_q="SELECT bo.*,bd.* FROM `booking_order` bo 
                INNER JOIN `booking_details` bd ON bo.booking_id=bd.booking_id
                WHERE bo.user_id=?";

                $booking_res=select($booking_q,[$_SESSION['user_id']],'i');

                if(mysqli_num_rows($booking_res)==0)
                {
                    redirect('index.php');
                }

                $booking_fetch=mysqli_fetch_assoc($booking_res);

                echo<<<data
                    <div class="col-12 px-4">
                        <p class="fw-bold alert alert-success">
                            <i class="bi bi-check-circle-fill"></i>
                            PAYMENT DONE! BOOKING SUCCESSFUL
                            <br><br>
                            <a href='bookings.php'>Go to Bookings</a>
                        </p>
                    </div>
                data;

                

            ?>

           
           

        </div>
    </div>

    <?php require('include/footer.php'); ?>
   
</body>
</html>
