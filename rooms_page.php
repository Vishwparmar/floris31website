<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floris31 Resort - ROOMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('include/header.php'); ?>
    <section class="ftco-section ftco-counter img" style="background-image: url(images/faciltiiess.jpg);background-attachment: fixed;
    background-position: top center;
    background-size: cover;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;">

    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-12">
		    		<div class="row">
		          <div class="col-md-12">
		            <div class="text-center">
		              <div class="text">
		               <h1 style="font-family: 'Leoney Font', sans-serif; text-shadow: 0px 0px 9px rgb(5 5 5 / 94%);font-weight: 600;color:#ffffff;margin-top:15%;margin-bottom:15%;">Accommodation</h1>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    	
    </section>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center mb-4">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border p-3 bg-light rounded mb-3">
                                <h5 class="mb-2" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="border p-3 bg-light rounded mb-3">
                                <h5 class="mb-2" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input me-1">
                                    <label class="form-check-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input me-1">
                                    <label class="form-check-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input me-1">
                                    <label class="form-check-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border p-3 bg-light rounded mb-3">
                                <h5 class="mb-2" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div>
                                        <label class="form-label">Childern</label>
                                        <input type="number" class="form-control">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div> 

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-lg-0 mb-3">
                            <img src="images\Rooms\room1.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities md-3">
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
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">₹1050 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-lg-0 mb-3">
                            <img src="images/Rooms/room2.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities md-3">
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹1050 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-lg-0 mb-3">
                            <img src="images/Rooms/room2.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities md-3">
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
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">₹1050 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require('include/footer.php'); ?>

</body>
</html>