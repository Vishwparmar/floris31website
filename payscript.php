<?php
session_start();
$api_key = "rzp_test_y2kVZIco1FJDTE";
require('admin/include/db_config.php');

    $frm_data = filteration($_POST);

    // Insert into booking_order table
    $query1 = "INSERT INTO `booking_order`(`user_id`, `room_id`, `check_in`, `check_out`) VALUES (?,?,?,?)";
    insert($query1,[$_SESSION['user_id'],$_SESSION['room']['id'],$frm_data['checkin'],$frm_data['checkout']],'isss');

    $booking_id=mysqli_insert_id($con);
 // Insert into booking_details table
      $query2 = "INSERT INTO `booking_details`(`booking_id`, `room_name`, `price`, `total_pay`, `user_name`, `phonenum`) VALUES (?,?,?,?,?,?)";
      insert($query2,[$booking_id,$_SESSION['room']['name'],$_SESSION['room']['price'],$_SESSION['room']['payment'], $_SESSION['username'],$_SESSION['phonenum']],'isssss');

?>


<form action="pay_status.php" method="POST">
    <input type="hidden" name="amount" value="<?php echo $_SESSION['room']['payment'] * 100; ?>">
    <input type="hidden" name="order_id" value="<?php echo 'ORD_' . $_SESSION['user_id'] . random_int(11111, 9999999); ?>">
    <input type="hidden" name="customer_id" value="<?php echo $_SESSION['user_id']; ?>">
    <input type="hidden" name="name" value="<?php echo $_SESSION['username']; ?>">
    <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $api_key; ?>"
        data-amount="<?php echo $_SESSION['room']['payment']*100; ?>"
        data-currency="INR"
        data-id="<?php echo 'ORD_'.$_SESSION['user_id'].random_int(11111,9999999);?>"
        data-customerid="<?php echo $_SESSION['user_id'];?>"
        data-buttontext="Pay with Razorpay"
        data-name="Floris31 Resort"
        data-description="Payment system"
        data-image="images/Rooms/logo-removebg-preview.png"
        data-prefill.name="<?php echo $_SESSION['username']; ?>"
        data-prefill.email="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" custom="Hidden Element" name="hidden"/>
</form>


