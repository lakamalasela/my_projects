<?php

if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION["ROLE"]) || $_SESSION["ROLE"]!="a"){
    header("location: ../login.php");
}

$id= $_POST["id"];
$name = $_POST["name"];

// DB connection
include("../includes/db.php");

$sql = "UPDATE brand SET name='$name' WHERE id='$id'";


if(mysqli_query($conn,$sql)){
    // echo "Updated Successfully";
    header("location: brand_list.php");
}else{
    "error:".mysqli_error($conn);
}

?>