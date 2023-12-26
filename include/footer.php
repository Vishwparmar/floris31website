<div class="container-fluid footer">
    <div class="row">
        <div class="col-lg-4 p-4" style = "margin-top:25px;">
            <h3 class="h-font fw-bold fs-3">Floris31 Resort </h3>
            <p>
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
                if($contact_r['tw']!=''){
                    echo<<<data
                        <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </a><br>
                    data;
                }
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

<script>
    function setActive() 
    {
        let navbar = document.getElementById('#nav-bar');
        let a_tags= document.getElementsByTagName('a');

        for (i=0; i<a_tags.length; i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name) >= 0){
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();
</script>
