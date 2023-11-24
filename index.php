<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floris31 Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;600&family=Playfair+Display:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css"/>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
            <img src="images/Rooms/logo-removebg-preview.png"Logo style="width: 60px; height: auto; margin-right: 10px;"> Floris31 Resort Management
        </a>

            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Facilities</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Contact us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
     </div>
   </nav>
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill"></i> User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span class="badge bg-secondary mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID (Aadhaar card, passport, driving license etc..)
                            that will be required during check-in
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                 </div>
                                 <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                 </div>
                                 <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control">
                                 </div>
                                 <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control">
                                 </div>
                                 <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" rows="1"></textarea>
                                 </div>
                                 <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control">
                                 </div>
                                 <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control">
                                 </div>
                                 <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                 </div>
                                 <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control">
                                 </div>
                            </div>
                        </div>
                        <div class ="text-center my-1">
                            <button type="submit" class="btn btn-dark">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/pic1.avif" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic2.jpg" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/room.webp" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic4.jpg" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                  <img src="images/pic5.jpg" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic6.webp" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic7.jpg" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic8.jpg" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic9.jpg" class="w-100 d-block" height="550px"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic10.jpg" class="w-100 d-block" height="550px"/>
                </div>
                </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/pic1.avif" class="w-100 d-block"  height="240px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic2.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic3.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic4.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic5.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic6.webp" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic7.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic8.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic9.jpg" class="w-100 d-block" height="260px"/>
              </div>
              <div class="swiper-slide">
                <img src="images/pic10.jpg" class="w-100 d-block" height="260px"/>
              </div>
            </div>
          </div>
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
    <h2 class="mt-5 pt-4 md-4 text-center fw-bold h-font">OUR ROOMS</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Rooms/room1.png" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">₹1050 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-secondary text-dark text-wrap">
                            1 Room
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Balcony view
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Max People : 2
                        </span>
                    </div>
                    <div class="facilities md-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-wifi"></i>
                        Free Wifi
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-tv"></i>
                            Television
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-fan"></i>
                            AC Room
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            HouseKeeping service
                        </span>
                    </div>
                    <div class="rating md-4">
                    <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Rooms/room2.png" class="card-img-top">
                <div class="card-body">
                    <h5>Deluxe Room</h5>
                    <h6 class="mb-4">₹2500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-secondary text-dark text-wrap">
                            1 Room
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Balcony view
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Max People : 2
                        </span>
                    </div>
                    <div class="facilities md-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-wifi"></i>
                        Free Wifi
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-tv"></i>
                            Television
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-fan"></i>
                            AC Room
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            HouseKeeping service
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Bath-tub
                        </span>
                    </div>
                    <div class="rating md-4">
                    <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/Rooms/room3.png" class="card-img-top">
                <div class="card-body">
                    <h5>Suite Room</h5>
                    <h6 class="mb-4">₹4500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge bg-secondary text-dark text-wrap">
                            1 Room
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Sofa
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Balcony view
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Max People : 2
                        </span>
                    </div>
                    <div class="facilities md-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-wifi"></i>
                        Free Wifi
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-tv"></i>
                            Television
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                        <i class="bi bi-fan"></i>
                            AC Room
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            HouseKeeping service
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            Bath-tub
                        </span>
                        <span class="badge bg-secondary text-dark text-wrap">
                            SPA Access
                        </span>
                    </div>
                    <div class="rating md-4">
                    <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    </div>
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

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 md-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Atque consectetur maxime voluptatibus reiciendis tempora dolores! Commodi error ut aliquid illum.
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
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Atque consectetur maxime voluptatibus reiciendis tempora dolores! Commodi error ut aliquid illum.
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
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Atque consectetur maxime voluptatibus reiciendis tempora dolores! Commodi error ut aliquid illum.
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
     
    <!-- Footer -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3">Floris31 Resort </h3>
                <p>
                    The website aims to provide an efficient and user-friendly way for the users to check and reserves rooms for a hassle-free tour as well as for the resort staff to interact with customers to improve their satisfaction.
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="text-decoration-none d-inline-block mb-2 text-dark">Home</a><br>
                <a href="#" class="text-decoration-none d-inline-block mb-2 text-dark">Rooms</a><br>
                <a href="#" class="text-decoration-none d-inline-block mb-2 text-dark">Facilities</a><br>
                <a href="#" class="text-decoration-none d-inline-block mb-2 text-dark">Contact Us</a><br>
                <a href="#" class="text-decoration-none d-inline-block mb-2 text-dark">About</a><br>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-twitter me-1"></i>Twitter
                </a><br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                </a><br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a><br>
            </div>
        </div>
    </div>
    

    <br><br><br>
    <br><br><br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        autoplay: {
            delay:2500,
            disableOnInteraction: false
        }
        });
        var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
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
