<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-usVBAd66/NpVNfBge19gws2j6JZinnca12rAe2l+d+QkLU9fiG02O1X8Q6hepIpr/EYKZvKx/I9WsnujJuOmBA==" crossorigin="anonymous">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous">
    <?php require('include/links.php'); ?>
    <title><?php echo $settings_r['site_title']?> - BOOKINGS</title>
</head>
<body class="bg-light">
    
<?php 

require('include/header.php'); 
require('connection.php');
if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true))
{
    redirect('index.php');
}

?>

<div class="container">
    <div class="row">
        <div class="col-12 my-5 px-4">
            <h2 class="fw-bold"> BOOKINGS</h2>
            <div style="font-size: 14px;">
                <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                <span class="text-secondary"> > </span>
                <a href="#" class="text-secondary text-decoration-none">BOOKINGS</a>
            </div>
        </div>

        <?php

        $query="SELECT bo.*, bd.* FROM `booking_order` bo
            INNER JOIN `booking_details` bd ON bo.booking_id = bd.booking_id
            WHERE ((bo.user_id=?))
            ORDER BY bo.booking_id DESC";       

        $result = select($query,[$_SESSION["user_id"]],"i");

        while($data = mysqli_fetch_assoc($result))
        {
            $date=date("d-m-Y",strtotime($data['date']));
            $checkin=date("d-m-Y",strtotime($data['check_in']));
            $checkout=date("d-m-Y",strtotime($data['check_out']));

            echo<<<bookings
                <div class='col-md-4 px-4 mb-4'>
                    <div class='bg-white p-3 rounded shadow-sm'>
                        <h5 class='fw-bold'>$data[room_name]</h5>
                        <p>₹$data[price]</p>
                        <p> 
                            <b>Check In : </b> $checkin <br>
                            <b>Check Out :</b> $checkout
                        </p>
                        <p> 
                            <b>Amount : </b> ₹$data[price] <br>
                            <b>Date : </b> $date
                        </p>
                    </div>
                </div>
            bookings;
        }

        ?>

    </div>
</div>

<?php require('include/footer.php'); ?>

</body>
</html>
