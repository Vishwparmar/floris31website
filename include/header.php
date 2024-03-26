<?php
require('connection.php'); 
session_start();
?>

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
            <img src="images/Rooms/logo-removebg-preview.png"Logo style="width: 60px; height: auto; margin-right: 10px;"><?php echo $settings_r['site_title']?>
        </a>

        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="primary">
                <li class="nav-item">
                    <a class="nav-link active me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="rooms_page.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="facilities_page.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2" href="Contact_page.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="aboutUs_page.php">About Us</a>
                </li>
            </ul>
            <div class="d-flex">
            <?php 
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                {
                  
                   echo<<<data
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            $_SESSION[username]
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="bookings.php">Bookings</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                   data;
       

                }
                else
                {
                    echo "<button type='button' class='btn btn-outline-dark shadow-none me-lg-3 me-2' data-bs-toggle='modal' data-bs-target='#loginModal'>
                            Login
                        </button>
                        <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal' data-bs-target='#registerModal'>
                        Register
                        </button>";
                }
            ?>
            </div>
        </div>
    </div>
    </div>
</nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="login-form" method="POST" action="login_register.php">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email or Username</label>
                            <input type="text" name="email_username" required class="form-control">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark" name="login">LOGIN</button>

                            <button type='button' class='btn shadow-none p-0' data-bs-toggle='modal' data-bs-target='#forgotModal' data-bs-dismiss="modal">
                                Forgot Password?
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="forgotModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="forgot-form" method="POST" action="forgotpassword.php">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> Reset Password
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control">
                        </div>
                       
                        <div class="mb-2 text-end">
                            <button type='button' class='btn shadow-none p-0 me-2' data-bs-toggle='modal' data-bs-target='#loginModal' data-bs-dismiss="modal" >
                                CANCEL
                            </button>
                            <button type="submit" class="btn btn-dark" name="send-reset-link">SEND LINK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="register-form" method="POST" action="login_register.php">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill"></i> User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input name="fullname" type="text" class="form-control shadow-none" required >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input name="phonenum" type="text" class="form-control shadow-none" required >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input name="username" type="text" class="form-control shadow-none" required >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control shadow-none" required>
                                </div>
                            </div>
                        </div>
                        <div class ="text-center">
                            <button type="submit" class="btn btn-dark" name="register">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
   