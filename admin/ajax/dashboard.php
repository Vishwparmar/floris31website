<?php
require('../include/db_config.php');
require('../include/essentials.php');

adminLogin();

if(isset($_POST['user_analytics'])) {
    $frmData = filteration($_POST);

    $condition = "";

    if($frm_data['period'] ==1) {
      $condition="WHERE datentime BETWEEN NOW() INTERVAL 30 DAY AND NOW()";
      }
      else if($frm_data['period'] ==2){
      $condition="WHERE datentime BETWEEN NOW() - INTERVAL 90 DAY AND NOW()";
      }
      else if($frm_data['period'] ==3){
      $condition="WHERE datentime BETWEEN NOW() - INTERVAL 1 YEAR AND NOW()";
      }
    }

    $total_queries = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(sr_no) AS `count`
      FROM `user_queries` "));

    $total_new_reg = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(user_id) AS `count`
      FROM `registered_users`"));

echo "$total_queries";
    $output = [ 'total_queries' =>$total_queries['count'],
      'total_new_reg' => $total_new_reg['count']
      ];
    $output = json_encode($output);
    echo $output;

?>

