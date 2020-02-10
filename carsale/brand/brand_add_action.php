<?php

if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION["ROLE"]) || $_SESSION["ROLE"]!="a"){
    header("location: ../login.php");
}

$name = $_POST["name"];

// DB connection
include("../includes/db.php");

$sql = "INSERT INTO brand(name)VALUES('$name')";


if(mysqli_query($conn,$sql)){
    header("location: brand_list.php");
}else{
    "error:".mysqli_error($conn);
}

?>