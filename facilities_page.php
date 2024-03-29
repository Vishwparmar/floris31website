<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
    <title><?php echo $settings_r['site_title']?>- FACILITIES</title>
    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
        .media:hover {
          /* Add your hover styles here */
          background-color: teal;
          cursor: pointer;
          transition: all 0.3s;
        }

        
    </style>
</head>
<body class="bg-light"><!--navbar-->
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
		               <h1 style="font-family: 'Leoney Font', sans-serif; text-shadow: 0px 0px 9px rgb(5 5 5 / 94%);font-weight: 600;color:#ffffff;margin-top:15%;margin-bottom:15%;">FACILITIES</h1>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    	
    </section>
<!-- Our facilities -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        The resort boasts a range of top-notch facilities, ensuring a delightful and comfortable stay for guests. The lush and well-maintained grounds feature a sparkling swimming pool, perfect for a refreshing dip or lazy lounging under the sun. For fitness enthusiasts, a well-equipped gym is available to keep up with workout routines. Indulge in culinary delights at the on-site restaurant, offering a diverse menu of delectable dishes. The resort also provides a rejuvenating spa for relaxation and pampering. With friendly staff, scenic views, and these amenities, the resort promises a memorable and enjoyable retreat for all its visitors.
        </p>
    </div> 
    <div class="container">
        <div class="row">
          <?php
            $res = selectAll('facilities');
            $path = FACILITIES_IMG_PATH;

            while($row= mysqli_fetch_assoc($res)){
              echo<<<data
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                  <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center md-2">
                      <img src="$path$row[icon]" width="200px" height="150px">
                      <h5 class="m-0 ms-3">$row[name]</h5>
                    </div>
                    <p>$row[description]</p>
                  </div>
                </div>
              data;
            }
          ?>
        </div>
    </div>
<!-- Additional services -->
<div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Additional Services</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3"></p>
    <div class="container">
        <div class="row d-flex">
          <div class="col-md-4" align="center">
            <div class="media block-6 services py-4 d-block text-center media">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              	<i class='fa fa-wifi' style="font-size: 49px;
                color: #ffffff;"></i>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
              <img width="48" height="48" src="https://img.icons8.com/fluency-systems-filled/48/wifi.png" alt="wifi"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Free Wifi<br>(Room Balconies & Public Area)</h3>
              </div>
            </div>      
          </div>
		   <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              	</div>
              </div>
              <div class="media-body p-3 mt-3">
               <img width="48" height="48" src="https://img.icons8.com/badges/48/waiter.png" alt="waiter"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Restro Cafe*</h3>
              </div>
            </div>      
          </div>
         <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<i class='fa fa-bed' style="font-size: 49px;
    color: #ffffff;"></i>
              	</div>
              </div>
              <div class="media-body p-3 mt-3">
              <img width="48" height="48" src="https://img.icons8.com/ios/50/housekeeper-female.png" alt="housekeeper-female"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Room Service</h3>
            
              </div>
            </div>      
          </div>
       <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<i class='fa fa-car' style="font-size: 49px;
    color: #ffffff;"></i>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
              <img width="50" height="50" src="https://img.icons8.com/ios/50/indoor-parking.png" alt="indoor-parking"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Car Parking</h3>
              </div>
            </div>      
          </div>
		  <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/wheelchair.png" alt="wheelchair"/>
                <h3 class="heading mb-4" style="font-size: 23px !important;">Wheelchair available</h3>
              </div>
            </div>      
          </div>
       <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <img width="48" height="48" src="https://img.icons8.com/pulsar-line/48/pickup-point.png" alt="pickup-point"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Airport Drop / Pick up*</h3>
              </div>
            </div>      
          </div>
       <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <img width="48" height="48" src="https://img.icons8.com/pulsar-line/48/exchange-rupee.png" alt="exchange-rupee"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Money Exchange*</h3>
            
              </div>
            </div>      
          </div>
       <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
            
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
              <img width="48" height="48" src="https://img.icons8.com/dotty/80/medical-doctor.png" alt="medical-doctor"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Doctor on Call*</h3>
            
              </div>
            </div>      
          </div>
       
          <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<i class='fa fa-lock' style="font-size: 49px;
    color: #ffffff;"></i>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
              <img width="48" height="48" src="https://img.icons8.com/dotty/80/safe.png" alt="safe"/>
                <h3 class="heading mb-3" style="font-size: 23px !important;">Safe Deposit Lockers*</h3>
            
              </div>
            </div>      
          </div>
          
          <div class="col-md-4">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<i class='fa fa-wheelchair' style="font-size: 49px;
    color: #ffffff;"></i>
              	</div>
              </div>
             
            </div>      
          </div>
        </div>
      </div>
</div>
    <!-- Footer -->
    <?php require('include/footer.php'); ?>

    <br><br><br>
    <br><br><br>

</body>
</html>
