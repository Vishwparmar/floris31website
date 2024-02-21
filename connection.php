<?php 
 
     $con = mysqli_connect("localhost","root","","floris31website");
     if(mysqli_connect_error())
     {
        echo "<script>
        alert('cannot connect to the database');
        </script>";
        exit();
        
     }
?>