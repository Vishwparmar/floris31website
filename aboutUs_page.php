<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floris31 Resort - ABOUT US</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
    <style>
        .box{
            border-top-color: var(--teal)!important;
        }
    </style>
</head>
<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Architecto provident earum id molestiae omnis eius sapiente <br> deserunt consequuntur officia nulla saepe,
             maiores labore quae voluptas! Nihil provident voluptatem sequi ipsam.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias dolore autem, tempora neque ducimus repellendus incidunt?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Molestias dolore autem, tempora neque ducimus repellendus incidunt?
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/feature/star.svg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/star.svg" width="70px">
                    <h4 class="mt-4">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/star.svg" width="70px">
                    <h4 class="mt-4">200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/star.svg" width="70px">
                    <h4 class="mt-4">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/feature/star.svg" width="70px">
                    <h4 class="mt-4">200+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
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
    </div>

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