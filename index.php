<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
    <title>Floris31 Resort - HOME</title>
<style>
    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }
    @media screen and (max-width: 575px){
        .availability-form{
        margin-top: 25px;
        padding:0 35px;
     }
    }

</style>
</head>
<body class="bg-light"><!--navbar-->
    <?php require('include/header.php'); ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/pic1.avif" class="w-100 d-block" height="480px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic2.jpg" class="w-100 d-block" height="480px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/room.webp" class="w-100 d-block" height="480px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic4.jpg" class="w-100 d-block" height="480px"/>
                </div>
                <div class="swiper-slide">
                  <img src="images/pic5.jpg" class="w-100 d-block" height="480px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic10.jpg" class="w-100 d-block" height="480px"/>
                </div>
                </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        

    <!--Check room availability-->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 md-4 text-center fw-bold h-font">OUR ROOMS</h2><br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Rooms/r1.png" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">₹1050 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            1 Room
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Balcony view
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            small Desk
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Max People : 4
                        </span>
                    </div>
                    <div class="facilities md-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            <i class="bi bi-wifi"></i>
                                Free Wifi
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            <i class="bi bi-tv"></i>
                                Television
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            <i class="bi bi-fan"></i>
                                AC Room
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                                HouseKeeping service
                        </span>
                    </div>
                    <div class="guests md-4">
                        <br>
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge bg-secondary text-dark text-wrap">
                        2 Guests
                    </span>
                    <span class="badge bg-secondary text-dark text-wrap">
                        3 Children
                    </span>
                    </div>
                    <div class="rating md-4">
                        <br>
                    <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <br>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>
                </div>  
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px ;margin: auto;">
                <img src="images/Rooms/r2.png" class="card-img-top">
                <div class="card-body">
                    <h5>Deluxe Room</h5>
                    <h6 class="mb-4">₹2500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            1 Room
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Balcony view
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Work-Table 
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Max People : 6
                        </span>
                    </div>
                    <div class="facilities md-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-secondary bg-light text-dark text-wrap">
                        <i class="bi bi-wifi"></i>
                        Free Wifi
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                        <i class="bi bi-tv"></i>
                            Television
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                        <i class="bi bi-fan"></i>
                            AC Room
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            HouseKeeping service
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Bath-tub
                        </span>
                    </div>
                    <div class="guests md-4">
                        <br>
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge bg-secondary text-dark text-wrap">
                        5 Guests
                    </span>
                    <span class="badge bg-secondary text-dark text-wrap">
                        3 Children
                    </span>
                    </div>
                    <div class="rating md-4 md-4">
                        <br>
                    <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <br>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Rooms/r4.png" class="card-img-top">
                <div class="card-body">
                    <h5>Suite Room</h5>
                    <h6 class="mb-4">₹4500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            1 Room
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Sofa
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Balcony view
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                           Work-Table
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Max People : 8
                        </span>
                    </div>
                    <div class="facilities md-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-secondary bg-light text-dark text-wrap">
                        <i class="bi bi-wifi"></i>
                        Free Wifi
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                        <i class="bi bi-tv"></i>
                            Television
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                        <i class="bi bi-fan"></i>
                            AC Room
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            HouseKeeping service
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            Bath-tub
                        </span>
                        <span class="badge bg-secondary bg-light text-dark text-wrap">
                            SPA Access
                        </span>
                    </div>
                    <div class="guests md-4">
                        <br>
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge bg-secondary text-dark text-wrap">
                        7 Guests
                    </span>
                    <span class="badge bg-secondary text-dark text-wrap">
                        5 Children
                    </span>
                    </div>
                    <div class="rating md-4">
                        <br>
                    <h6 class="mb-1">Rating</h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <br>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-lg-12 text-center mt-5">
             <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
         </div>
        </div>
    </div>

    <!--Our Facilities -->

    <h2 class="mt-5 pt-4 md-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-1 text-center bg-white rounded shadow py-4 my-3 center-content">
                <img width="48" height="48" src="https://img.icons8.com/fluency-systems-filled/48/wifi.png" alt="wifi"/>
                <!-- <img src="images/feature/wifi-logo.svg" width="80px"> -->
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-1 text-center bg-white rounded shadow py-4 my-3">
                <img width="48" height="48" src="https://img.icons8.com/windows/32/swimming.png" alt="swimming"/>
                <!-- <img src="images/feature/wifi-logo.svg" width="80px"> -->
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 col-md-1 text-center bg-white rounded shadow py-4 my-3 center-content">
                <img width="48" height="48" src="https://img.icons8.com/pulsar-line/48/spa-care.png" alt="spa-care"/>
                <h5 class="mt-4">SPA</h5>
            </div>

            <div class="col-lg-2 col-md-1 text-center bg-white rounded shadow py-4 my-3">
                <img width="48" height="48" src="https://img.icons8.com/ios/48/barbell.png" alt="barbell"/>
                <!-- <img src="images/feature/wifi-logo.svg" width="80px"> -->
                <h5 class="mt-3">GYM</h5>
            </div>
            <div class="col-lg-2 col-md-1 text-center bg-white rounded shadow py-4 my-3">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/movie-theater.png" alt="movie-theater"/>
                <!-- <img src="images/feature/wifi-logo.svg" width="80px"> -->
                <h5 class="mt-3">Mini Theatre</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 md-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/feature/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Incredible experience! The resort's breathtaking views and outstanding service made our stay unforgettable. A true gem!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/feature/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                    Exceptional hospitality! From the warm welcome to the impeccable service, every moment at the resort was pure delight. Can't wait to return!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/feature/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                    Exceptional service! The resort's friendly staff went above and beyond to ensure a warm and welcoming experience. Their genuine hospitality made our stay truly memorable
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach us -->

    <h2 class="mt-5 pt-4 md-4 text-center fw-bold h-font">REACH US</h2><br>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                    </a>
                    <br>
                    <?php 
                        if($contact_r['pn2']!=''){
                            echo<<<data
                                <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                                </a>
                            data;
                        }
                    ?>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <?php 
                        if($contact_r['tw']!=''){
                            echo<<<data
                                <a href="$contact_r[tw]" class="d-inline-block mb-3">
                                    <span class="badge bg-light text-dark fs-6 p-2">
                                    <i class="bi bi-twitter me-1"></i> Twitter
                                    </span>  
                                </a>
                                <br>
                            data;
                        }
                    ?>
                    
                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('include/footer.php'); ?>

    <br><br><br>
    <br><br><br>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script> -->
        <script>
            var swiper = new Swiper(".mySwiper2", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay :{
                delay: 2500,
                disableoninteraction: false,
            }
            });

                var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
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
                    slidesPerView: "2",
                },
                1024:{
                    slidesPerView: "3",
                },
            }
            });
  </script>
</body>
</html>
