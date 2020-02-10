<?php

if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION["ROLE"]) || $_SESSION["ROLE"]!="a"){
    header("location: ../login.php");
}

$name = $_POST["fname"];

// DB connection
include("../includes/db.php");

$sql = "INSERT INTO fuel(fuel_type)VALUES('$name')";


if(mysqli_query($conn,$sql)){
    echo "Saved Successfully";
}else{
    "error:".mysqli_error($conn);
}

?>