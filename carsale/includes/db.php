<?php 

$conn = mysqli_connect('localhost','root','','db_carsale');

if(mysqli_errno($conn)){
    echo "error".mysqli_error($conn);
}








?>