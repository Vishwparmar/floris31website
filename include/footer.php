<!-- <div class="container-fluid footer">
    <div class="row">
        <div class="col-lg-4 p-4" style = "margin-top:25px;">
            <h3 class="h-font fw-bold fs-3"> <?php echo $settings_r['site_title']?></h3>
            <p>
                <?php echo $settings_r['site_about']?>
                The website aims to provide an efficient and user-friendly way for the users to check and reserves rooms for a hassle-free tour as well as for the resort staff to interact with customers to improve their satisfaction.
            </p>
        </div>
        <div class="col-lg-4 p-4" style = "margin-top:25px;">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="text-decoration-none d-inline-block mb-2 text-dark">Home</a><br>
            <a href="rooms_page.php" class="text-decoration-none d-inline-block mb-2 text-dark">Rooms</a><br>
            <a href="facilities_page.php" class="text-decoration-none d-inline-block mb-2 text-dark">Facilities</a><br>
            <a href="Contact_page.php" class="text-decoration-none d-inline-block mb-2 text-dark">Contact Us</a><br>
            <a href="aboutUs_page.php" class="text-decoration-none d-inline-block mb-2 text-dark">About</a><br>
        </div>
        <div class="col-lg-4 p-4"style = "margin-top:25px;">
            <h5 class="mb-3">Follow us</h5>
            <?php
                // if($contact_r['tw']!=''){
                //     echo<<<data
                //         <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
                //             <i class="bi bi-twitter me-1"></i>Twitter
                //         </a><br>
                //     data;
                // }
            ?>
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-facebook me-1"></i>Facebook
            </a><br>
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-instagram me-1"></i>Instagram
            </a><br>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-c7Ks/M6dlHVykO2XSo0fKMjumX8enOrXZyjAeMljbZauK20PVR+Nc2g4jIf6kfydro6cV4s796czXs6f6S0b3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-lGBxYnSTsD3hftJzr/kfrDd/9HGVgKbprXZi1J6+6i+nm4Sg2DkFi2K5WdHhL51E8wqLeksrVjIE9s8s4EeDqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .footer {
            background-image: url('images/img1.jpg'); /* Replace 'path_to_your_image.jpg' with the actual path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Ensures the background image remains fixed while scrolling */
            animation: slide 10s infinite alternate; /* Customize the animation duration and behavior as needed */
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        @keyframes slide {
            0% {
                background-position: 0% 0%;
            }
            100% {
                background-position: 100% 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid footer">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="fw-bold fs-3"> <?php echo $settings_r['site_title']?></h3>
                <p>
                    <?php echo $settings_r['site_about']?>
                    The website aims to provide an efficient and user-friendly way for the users to check and reserves rooms for a hassle-free tour as well as for the resort staff to interact with customers to improve their satisfaction.
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="index.php" class="text-decoration-none d-inline-block mb-2 text-light">Home</a><br>
                <a href="rooms_page.php" class="text-decoration-none d-inline-block mb-2 text-light">Rooms</a><br>
                <a href="facilities_page.php" class="text-decoration-none d-inline-block mb-2 text-light">Facilities</a><br>
                <a href="Contact_page.php" class="text-decoration-none d-inline-block mb-2 text-light">Contact Us</a><br>
                <a href="aboutUs_page.php" class="text-decoration-none d-inline-block mb-2 text-light">About</a><br>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow us</h5>
                <?php
                if($contact_r['tw']!=''){
                    echo<<<data
                        <a href="$contact_r[tw]" class="d-inline-block text-decoration-none mb-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </a><br>
                    data;
                }
                ?>
                <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block  text-decoration-none mb-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                </a><br>
                <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-decoration-none mb-2">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

