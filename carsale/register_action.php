<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $password = $_POST["password"];

    // echo "Name=".$name."<br/>";
    // echo "Email=".$email."<br/>";
    // echo "Mobile=".$mobile."<br/>";
    // echo "Password=".$password."<br/>";

    include ("includes/db.php");


    $sql = "INSERT INTO member(name,email,mobile,password,address,role,reg_date,status)VALUES('$name','$email','$mobile',md5('$password'),'$address','u',now(),1)";



    if(mysqli_query($conn,$sql)){
        echo "Thank You for Registrering with Us!";
    }else{
        echo "Error:".mysqli_error($conn);
    }

    //Authordication
    ?> 
