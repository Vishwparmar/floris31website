<?php
require('connection.php'); 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$v_code)
{
    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);
    try 
    {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'floris31website@gmail.com';                     //SMTP username
        $mail->Password   = 'kqzi ohaa jsot vevz';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('floris31website@gmail.com', 'Floris31 Resort');
        $mail->addAddress($email);    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification from Floris31 Resort';
        $mail->Body    = "Thanks for registration!
                          Click the link below to verify the email address
                          <a href='http://localhost/floris31website/verify.php?email=$email&v_code=$v_code'>Verify</a>";
    
        $mail->send();
        return true;
    }
    catch (Exception $e)
    {
        return false;
    }
}

//login
if(isset($_POST['login']))
{
    $query="SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==1)
            {
                if(password_verify($_POST['password'],$result_fetch['password']))
                {
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    $_SESSION['phonenum']=$result_fetch['phonenum'];
                    $_SESSION['user_id']=$result_fetch['user_id'];
                    $_SESSION['email']=$result_fetch['email'];

                    header("location: index.php");
                }
                else
                {
                    echo "<script>
                    alert('Incorrect Password');
                    window.location.href='index.php';
                    </script>";
                }
            }
            else
            {
                echo "<script>
                    alert('Email not verified');
                    window.location.href='index.php';
                    </script>";
            }
        }
        else
        {
            echo "<script>
            alert('Email or Username Not Registered');
            window.location.href='index.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Cannot Run Query');
        window.location.href='index.php';
        </script>";
    }
}

// Registration
if (isset($_POST['register']))
{
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username` = '$_POST[username]' OR `email` = '$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) 
    {
        if (mysqli_num_rows($result) > 0) #if any user has already taken username or email
        {

            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username'])
            {
                echo "<script>alert('$result_fetch[username] - Username already taken'); window.location.href='index.php';</script>";
            }
            else
            {
                echo "<script>alert('$result_fetch[email] - E-mail already taken'); window.location.href='index.php';</script>";
            }
        }
        else
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $v_code=bin2hex(random_bytes(16));
            $query="INSERT INTO `registered_users`(`full_name`, `phonenum`,`username`, `email`, `password`,`verification_code`, `is_verified`) VALUES ('$_POST[fullname]','$_POST[phonenum]','$_POST[username]','$_POST[email]','$password','$v_code','0')";
            if(mysqli_query($con,$query) && sendMail($_POST['email'],$v_code))
            {
                echo "<script>
                alert('Registration Successful');
                window.location.href='index.php';
                </script>";

            }
            else
            {
                echo "<script>
                alert('Server down');
                window.location.href='index.php';
                </script>";
            }
        }
    }
    else
    {
        echo "<script>
        alert('Cannot Run Query');
        window.location.href='index.php';
        </script>";
    }
}   
?>
