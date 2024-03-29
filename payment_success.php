

<?php
    session_start();
    $api_key = "rzp_test_y2kVZIco1FJDTE"; // Your Razorpay Test API Key

    // Retrieving form data submitted via POST method
    $amount = $_POST['amount'] / 100; // Converting amount back to rupees
    $order_id = $_POST['order_id'];
    $customer_id = $_POST['customer_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    date_default_timezone_set('Asia/kolkata');
    $date=date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
</head>
<body>
    <h1>Payment Successful</h1>
    <h2>Payment Details:</h2>
    <p><strong>Order ID:</strong> <?php echo $order_id; ?></p>
    <p><strong>Customer ID:</strong> <?php echo $customer_id; ?></p>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Amount Paid (INR):</strong> ₹<?php echo $amount; ?></p>
    <p><strong>Mobile Number:</strong> <?php echo isset($_SESSION['phonenum']) ? $_SESSION['phonenum'] : 'Not available'; ?></p>
    <p><strong>Date:</strong> <?php echo $date; ?></p>
</body>
</html>
