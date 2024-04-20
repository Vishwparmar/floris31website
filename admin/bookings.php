<?php 
    require('include/essentials.php');
    require('include/db_config.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Bookings </title>
    <?php require('include/links.php'); ?>
</head>
<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">BOOKINGS</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">User Details</th>
                                    <th scope="col">Room Details</th>
                                    <th scope="col">Booking Details</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id='table-data'>
                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>  
   
    <!--Assign room no modal-->
<div class="modal fade" id="assign-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="assign_room_form">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Assign Room</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Room Number</label>
                    <input name="room_no" type="text" class="form-control" required>
                </div>
            </div>
            <input type="hidden" name="booking_id">
            <div class="modal-footer">
                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn custom-bg text-white shadow-none">ASSIGN</button>
            </div>
            </div>
        </form>
    </div>
</div>
   
    <?php require('include/scripts.php'); ?>
    <script src="scripts/bookings.js"></script>

</body>
</html>