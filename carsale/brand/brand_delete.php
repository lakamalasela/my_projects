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

$sql = "DELETE FROM brand WHERE id='$id'";


if(mysqli_query($conn,$sql)){
    // echo "Updated Successfully";
    header("location: brand_list.php");
}else{
    "error:".mysqli_error($conn);
}

?>