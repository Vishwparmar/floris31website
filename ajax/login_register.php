<?php

require('../admin/include/db_config.php');
require('../admin/include/essentials.php');


if (isset($_POST['register'])) {
    $data = filteration($_POST);

    // match password and confirm password field

    if ($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    if(isset($_POST['login']))
    {
        $data = filteration($_POST);

        $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum` = ? LIMIT 1",
            [$data['email_mob'], $data['email_mob']], "ss");

        if(mysqli_num_rows($u_exist) == 0){
            echo 'inv_email_mob';
        }
        else
        {
            $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['is_verified']==0)
            {
                echo 'not_verified';
            }
            else if($u_fetch['status']==0)
            {
                echo 'inactive';
            }
            else{
                if(!password_verify($data['pass'],$u_fetch['password']))
                {
                    echo 'invalid_pass';
                }
                else
                {
                    session_start();
                    $_SESSION['login']=true;
                    $_SESSION['uId']=$u_fetch['id'];
                    $_SESSION['uName']=$u_fetch['name'];
                    $_SESSION['uPic']=$u_fetch['profile'];
                    $_SESSION['uPhone']=$u_fetch['phonenum'];
                    echo 1;
                }
            }
        }
    }
}
?>
