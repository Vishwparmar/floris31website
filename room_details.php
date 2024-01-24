<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
    <title><?php echo $settings_r['site_title']?> - ROOMS</title>
</head>
<body class="bg-light">
    
    <?php require('include/header.php'); ?>
    <?php 
        if(!isset($_GET['id'])){
            redirect('rooms_page.php');
        }

        $data= filteration($_GET);

        $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND `status`=? AND `removed`=?",[$data['id'],1,0],'iii');

        if(mysqli_num_rows($room_res)==0){
            redirect('rooms_page.php');
        }

        $room_data = mysqli_fetch_assoc($room_res);



    ?>
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

    <div class="container">
        <div class="row">
            <div class="col-12 my-5 mb-4 px-4">
                <h2 class="fw-bold"><?php echo $room_data['name']?></h2>
                <div style="font-size: 14px;">
                    <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                    <span class="text-secondary"> > </span>
                    <a href="rooms_page.php" class="text-secondary text-decoration-none">ROOMS</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 px-4">
                <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php 

                            $room_img = ROOMS_IMG_PATH."logo-removebg-preview.png";
                            $img_q = mysqli_query($con,"SELECT * FROM `room_images` 
                                WHERE `room_id`='$room_data[id]'");
    
                            if(mysqli_num_rows($img_q)>0){

                                $active_class='active';
                                while($img_res = mysqli_fetch_assoc($img_q))
                                {
                                    echo "<div class='carousel-item $active_class'>
                                            <img src='".ROOMS_IMG_PATH.$img_res['image']."' class='d-block w-100 rounded'>
                                        </div>";
                                    $active_class='';
                                }
                            }
                            else{
                                echo "<div class='carousel-item active'>
                                <img src='$room_img' class='d-block w-100'>
                                </div>";
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <?php 

                            echo<<<price
                                <h4>₹$room_data[price] per night</h4>
                            price;

                            echo<<<rating
                                <div class="mb-3">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                            rating;

                            $fea_q = mysqli_query($con,"SELECT f.name FROM `features` f 
                            INNER JOIN `room_features` rfea ON f.id = rfea.features_id 
                            WHERE rfea.room_id = '$room_data[id]'");

                            $features_data = "";
                            while($fea_row = mysqli_fetch_assoc($fea_q)){
                                $features_data .="<span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                                    $fea_row[name]
                            
                                   </span>";
                            }
                            echo<<<features
                                <div class="mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    $features_data
                                </div>
                            features;

                            $fac_q = mysqli_query($con,"SELECT f.name FROM `facilities` f 
                            INNER JOIN `room_facilities` rfac ON f.id = rfac.facilities_id 
                            WHERE rfac.room_id = '$room_data[id]'");

                            $facilities_data = "";
                            while($fac_row = mysqli_fetch_assoc($fac_q)){
                                $facilities_data .="<span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                                    $fac_row[name]
                                </span>";
                            }
                            echo<<<facilities
                            <div class="mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                $facilities_data
                            </div>
                            facilities;

                            echo<<<guests
                                <div class="mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        $room_data[adult] Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        $room_data[children] Children
                                    </span>
                                 </div>
                            guests;

                            echo<<<area
                                <div class="mb-3">
                                    <h6 class="mb-1">Area</h6>
                                    <span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                                        $room_data[area] sq. ft.
                                    </span>
                                </div>
                            area;

                            echo<<<book
                                <a href="#" class="btn w-100 text-white custom-bg shadow-none mb-1">Book Now</a>
                            book;



                        ?>
                    </div>
                </div>
            </div>


            <div class="col-12 mt-4 px-4">

                <div class="mb-5">
                    <h5>Description</h5>
                    <p>
                        <?php echo $room_data['description'] ?>
                    </p>
                </div>
                <div>
                    <h5 class="mb-3">Reviews & Ratings</h5>
                    <div>
                        <div class="d-flex align-items-center mb-2">
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
                </div>
                
            </div>

        </div>
    </div>

    <?php require('include/footer.php'); ?>

</body>
</html>