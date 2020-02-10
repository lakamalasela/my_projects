<?php

if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION["ROLE"]) || $_SESSION["ROLE"]!="a"){
    header("location: ../login.php");
}

$id= $_GET["id"];


// DB connection
include("../includes/db.php");

$sql = "DELETE FROM fuel WHERE id='$id'";


if(mysqli_query($conn,$sql)){
    // echo "Updated Successfully";
    header("location: fuel_type_list.php.php");
}else{
    "error:".mysqli_error($conn);
}

?>