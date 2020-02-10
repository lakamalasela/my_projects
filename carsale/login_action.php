<?php

if(!isset($_SESSION)){
    session_start();
}

    $email = $_POST["email"];
    $password = $_POST["password"];

   
    include("includes/db.php");
    
    $sql = "SELECT * FROM member WHERE email ='$email' AND password=md5('$password')";



    $result = mysqli_query($conn,$sql);

    if($row = mysqli_fetch_array($result)){
        //Login Success
        $_SESSION["MID"] = $row["id"];
        $_SESSION["NAME"] = $row["name"];
        $_SESSION["ROLE"] = $row["role"];
        if($row["role"] =="a"){
            header("Location: dashboard.php");
        }else{
            header("Location: index.php");
        }

        
    }else{
        //Login Fail
        header("Location: login.php?msg=Invalid Email or Password");
    }






    // if($email == "admin"  && $password=="123"){
    //     echo "Login Success!";
    // }else{
    //     echo "Login Failed!";
    // }
?>