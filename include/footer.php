<div class="container-fluid footer">
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

        function alert(type,msg){
            let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
            let element = document.createElement('div');
            element.innerHTML = `<div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
                    <strong class="me-3">${msg}</strong>                 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
            document.body.append(element);
            setTimeout(remAlert, 3000);
    }

    function remAlert(){
        document.getElementsByClassName('alert')[0].remove();
    }

    function checkLoginToBook(status,room_id){
        if(status){
            window.location.href='confirm_booking.php?id='+room_id;
        }
        else{
            alert('error','Please login to book room!');
        }
    }



    /*function setActive() 
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
    }*/

    /*let register_form= document.getElementById('register-form');

    register_form.addEventListener('submit', (e)=>{
        e.preventDefault();

        let data = new FormData();

      data.append('name',register_form.elements['name'].value);
      data.append('email',register_form.elements['email'].value);
      data.append('phonenum',register_form.elements['phonenum'].value);
      data.append('address',register_form.elements['address'].value);
      data.append('pincode', register_form.elements['pincode'].value);
      data.append('dob',register_form.elements['dob'].value);
      data.append('pass',register_form.elements['pass'].value);
      data.append('cpass',register_form.elements['cpass'].value);
      data.append('profile',register_form.elements['profile'].files[0]);
      data.append('register','');
      
      var myModal = document.getElementById('registerModal');
      var modal = bootstrap. Modal.getInstance (myModal);
      modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);
        xhr.onload = function(){
            if(this.responseText == 'pass_mismatch'){
                alert('error', "Password Mismatch!");
            }
            else if(this.responseText == 'email_already'){
                alert('error',"Email is already registered!");
            }
            else if(this.responseText == 'phone_already'){
                alert('error', "Phone number is already registered!");
            }
            else if(this.responseText == 'inv_img'){
                alert('error', "Only JPG, WEBP & PNG images are allowed!");
            }
            else if(this.responseText == 'upd_failed'){
                alert('error', "Image upload failed!");
            }
            else if(this.responseText == 'ins_failed'){
                alert('error',"Registration failed!", "Server Down!");
            }
            else{
                alert('success', "Registration successfully registered!");
                register_form.reset();
            }
            
        }      
        xhr.send(data);
    });

    let login_form = document.getElementById('login-form');

    login_form.addEventListener('submit', (e)=>{
      e.preventDefault();

      let data= new FormData();
     
      data.append('email_mob',login_form.elements['email_mob'].value);
      data.append('pass', login_form.elements['pass'].value);
      data.append('login','');

      var myModal = document.getElementById('loginModal');
      var modal = bootstrap. Modal.getInstance (myModal);
      modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);
        xhr.onload = function(){
            if(this.responseText == 'inv_email_mob'){
                alert('error', "Invalid Email or Mobile Number!");
            }
            else if(this.responseText == 'not_verified'){
                alert('error',"Email is not verified!");
            }
            else if(this.responseText == 'inactive'){
                alert('error', "Account Suspended! Please Contact Admin!");
            }
            else if(this.responseText == 'invalid_pass'){
                alert('error', "Incorrect Password!");
            }
            else{
                window.location = window.location.pathname;
            }
        }
        xhr.send(data);

    });

    setActive();*/
</script>
