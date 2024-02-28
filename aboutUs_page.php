<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
    <title><?php echo $settings_r['site_title']?> - ABOUT US</title>
    <style>
        .box{
            border-top-color: var(--teal)!important;
        }
    </style> 
</head>
<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center mb-4">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="mt-2 mb-2">
            Encompassed by natural landscapes& greenery, Floris31 Resort, Ahmedabad offers a memorable experience in the vibrant city of Ahmedabad.
            Our resort offers guests a range of services and amenities designed to provide comfort and convenience. 24-hour room service, 
            free Wi-Fi in all rooms, 24-hour security, daily housekeeping, wheelchair accessible are just some of the facilities on offer.
            Guestrooms are fitted with all the amenities you need for a good night's sleep
            A cluster of spacious lawns nestled inside this venue is suitable to host your most sought after events. Be it pre-wedding functions, receptions, weddings or even 
            cocktail parties or Family / Group Picnics, Corporate Picnics, Birthday Parties, Get-Togethers Parties etc. Floris31 Resort, Sanand, Ahmedabad also boasts of a pool-side lawn. 
            The lawns boast of well-maintained green covers and invoke refreshing vibes. A dream venue for all sorts of gatherings, Floris31 Resort is sure to leave you mesmerized.
            We invite you to be part of the experience. If for you, having all possible amenities on hand is necessary for a perfect vacation - then again, Floris31 Resort is the one for you.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Why to choose us?</h3>
                <p>
                    Our resort is committed to sustainability and environmental responsibility. We implement eco-friendly practices 
                    throughout our operations, minimizing our impact on the delicate ecosystem. 
                    Our dedication to sustainability is evident in our water conservation efforts, energy-efficient appliances, 
                    and use of biodegradable products.<br><br>
                    At our resort, we believe that every guest deserves an exceptional experience. 
                    Our attentive and friendly staff is dedicated to providing personalized service, ensuring that your stay is truly unforgettable.
                    We are committed to exceeding your expectations and leaving you feeling relaxed, refreshed, and inspired.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/pic2.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/rooms.png" width="70px">
                    <h4 class="mt-4">50+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/customers.png" width="70px">
                    <h4 class="mt-4">200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/rating.png" width="70px">
                    <h4 class="mt-4">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/staff.png" width="70px">
                    <h4 class="mt-4">100+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/manager.jpg" class="w-50">
                    <h5 class="mt-2">Vishwa Parmar</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/manager.jpg" class="w-50">
                    <h5 class="mt-2">Disha Shah</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/manager.jpg" class="w-50">
                    <h5 class="mt-2">Nupur Suthar</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="" class="w-100">
                    <h5 class="mt-2">Random name</h5>
                </div>
                </div>
            <div class="swiper-pagination"></div>
        </div>
    </div> -->

    <?php require('include/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
            320:{
                slidesPerView: "1",
            },
            640:{
                slidesPerView: "1",
            },
            768:{
                slidesPerView: "3",
            },
            1024:{
                slidesPerView: "3",
            },
        }
      });
    </script>

</body>
</html>