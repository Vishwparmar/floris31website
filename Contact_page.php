<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floris31 Resort - CONTACT US</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php'); ?>
</head>
<body class="bg-light"><!--navbar-->
    <?php require('include/header.php'); ?>

    <!-- Our facilities -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            The resort boasts a range of top-notch facilities, ensuring a delightful and
            comfortable stay for guests. The lush and well-maintained grounds feature a sparkling swimming pool,
            perfect for a refreshing dip or lazy lounging under the sun. For fitness enthusiasts, a well-equipped gym is 
            available to keep up with workout routines. Indulge in culinary delights at the on-site restaurant, offering a diverse menu 
            of delectable dishes. The resort also provides a rejuvenating spa for relaxation and pampering. With friendly staff, scenic views, 
            and these amenities, the resort promises a memorable and enjoyable retreat for all its visitors.
        </p>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded md-4" height="350" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
                 
                <h5>Address</h5>
                <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark md-2">
                    <i class="bi bi-geo-alt"></i> <?php echo $contact_r['adress'] ?> 
                </a>

                <h5 class="mt-4">Call us</h5>
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

                <h5 class="mt-4">Email</h5>
                <a href="mailto: <?php echo $contact_r['email'] ?> " class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope"></i> <?php echo $contact_r['email'] ?> 
                </a>

                  <h5 class="mt-4">Follow us</h5>
                  <?php 
                    if($contact_r['tw']!=''){
                        echo<<<data
                            <a href="$contact_r[tw]" class="d-inline-block text-dark fs-5 me-2">
                                <i class="bi bi-twitter me-1"></i> 
                            </a>
                        data;
                    }
                  ?>
                    
                    <a href="<?php echo $contact_r['fb'] ?> " class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="<?php echo $contact_r['insta'] ?> " class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
            <form>
                <h5>Send a message</h5>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Name</label>
                    <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Email</label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Subject</label>
                    <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Message</label>
                    <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                </div> 
                <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
            </form>
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
