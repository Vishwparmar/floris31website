<?php 
    require('include/essentials.php');
    require('include/db_config.php');
    adminLogin();

    if(isset($_GET['seen']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['seen']=='all'){
            $q = "UPDATE `user_queries` SET `seen`=?";
            $values = [1];
            if (update($q,$values,'i')){
            alert('success','Marked all as read!');
            }
            else{
                alert('error', 'Operation Failed!');
            }
        }
        else{
            $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no` =?";
            $values = [1,$frm_data['seen']];
            if (update($q,$values,'ii')){
            alert('success','Marked as read!');
            }
            else{
                alert('error', 'Operation Failed!');
            }
        }
    }

    if(isset($_GET['del']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['del']=='all'){
            $q = "DELETE FROM `user_queries`";
            if(mysqli_query($con,$q)){
            alert('success',' All Data deleted !');
            }
            else{
                alert('error', 'Operation failed!');
            }
        }
        else{
            $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
            $values = [$frm_data['del']];
            if(delete($q,$values,'i')){
            alert('success','Data deleted !');
            }
            else{
                alert('error', 'Operation failed!');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities </title>
    <?php require('include/links.php'); ?>
</head>
<body class="bg-light">

    <?php require('include/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">FEATURES AND FACILITIES</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                          <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div> 


                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead>
                                <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="features-data">
                            </tbody>
                        </table>
                    </div>
                    
                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                          <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div> 


                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                        <table class="table table-hover border">
                            <thead>
                                <tr class="bg-dark text-light">
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Name</th>
                                <th scope="col" width="40%">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="facilities-data">
                            </tbody>
                        </table>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    
<!--Feature modal-->
            
<div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="feature_s_form">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Add Feature</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input name="feature_name" type="text" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
            </div>
            </div>
        </form>
    </div>
</div>

<!--Facility modal-->

<div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="facility_s_form">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Add Facility</h5>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input name="facility_name" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Icon</label>
                    <input name="facility_icon" accept=".jpg, .png, .webp, .jpeg" type="file" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="facility_desc" class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
            </div>
            </div>
        </form>
    </div>
</div>

        
<?php require('include/scripts.php'); ?>
<script src="scripts/features_facilities.js"></script>
</body>
</html>