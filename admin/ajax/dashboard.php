<?php
require('../include/db_config.php');
require('../include/essentials.php');

adminLogin();

if (isset($_POST['user_analytics'])) {
    $frmData = filteration($_POST);

    $condition = "";

    switch ($frmData['period']) {
        case 'last_week':
            $condition = "WHERE WEEK(datentime) = WEEK(NOW()) - 1 AND YEAR(datentime) = YEAR(NOW())";
            break;
        case 'this_week':
            $condition = "WHERE WEEK(datentime) = WEEK(NOW()) AND YEAR(datentime) = YEAR(NOW())";
            break;
        default:
            $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 30 DAY AND NOW()";
            break;
    }

    $totalQueries = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(sr_no) AS `count`
      FROM `user_queries` $condition"));

    $totalNewReg = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(user_id) AS `count`
      FROM `registered_users`"));

    echo "total_new_reg={$totalNewReg['count']}&total_queries={$totalQueries['count']}";
} elseif (isset($_POST['new_registration'])) {
    // Handle new registration
    $totalNewReg = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(user_id) AS `count`
      FROM `registered_users`"));
    echo "total_new_reg={$totalNewReg['count']}";
}
?>


