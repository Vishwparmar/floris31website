<?php 

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'floris31website';

    $con = mysqli_connect($hname,$uname,$pass,$db);

    if(!$con){
        die("Cannot Connect To Database".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $value = trim($value);
            $value = stripslashes($value);
            $value = strip_tags($value);
            $value = htmlspecialchars($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function selectAll($table){
        $con = $GLOBALS['con'];
        $res = mysqli_query($con,"SELECT * FROM $table");
        return $res;
    }

    function select($sql,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query Cannot Be Executed - Select");
            }
        }
        else{
            die("Query Cannot Be Prepared - Select");
        }
    }

    function update($sql,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query Cannot Be Executed - Update");
            }
        }
        else{
            die("Query Cannot Be Prepared - Update");
        }
    }

    function insert($sql,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query Cannot Be Executed - Insert");
            }
        }
        else{
            die("Query Cannot Be Prepared - Insert");
        }
    }

    function delete($sql,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query Cannot Be Executed - Delete");
            }
        }
        else{
            die("Query Cannot Be Prepared - Delete");
        }
    }

?>