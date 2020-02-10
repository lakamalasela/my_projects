<?Php 

if(!isset($_SESSION)){
    session_start();
}



if(!isset($_SESSION["ROLE"]) || $_SESSION["ROLE"]!="a"){
    header("location: ../login.php");
}


$model_id = $_POST["model_id"];
$title = $_POST["title"];
$description= $_POST["description"];
$price = $_POST["price"];
$fuel_type= $_POST["fuel_type"];
$milage= $_POST["milage"];
$year= $_POST["year"];
$photo= "-";
$location= $_POST["location"];
$member_id = $_SESSION["MID"];
$date = date('Y-m-d');
$sold = 0;
$view_count = 0;


$folder = "uploads/";
$destfile = $folder.basename($_FILES["photo"]["name"]);
$sourceFile = $_FILES["photo"]["tmp_name"];


if(move_uploaded_file($sourceFile,"../".$destfile)){
    echo "File has been upload.";
    $photo = $destfile;
}else{
    echo "Error Uploading...";
}
// $Mname = $_POST["name"];
// $color = $_POST["Cname"];
// $gearT = $_POST["gearT"];

// if($gearT=='manual'){
//     $setGear = 1;
// }else if($gearT=='auto'){
//     $setGear = 0;
// }

include("../includes/db.php");

$Sqal = "INSERT INTO car(model_id,title,description,price,fuel_type,milage,	year,photo,location,member_id,date,sold,view_count)VALUES('$model_id ','$title','$description','$price','$fuel_type','$milage','$year','$photo','$location','$member_id','$date','$sold','$view_count')";


if(mysqli_query($conn,$Sqal)){
    echo "Save Successfully";
}else{
    echo "error:".mysqli_error($conn);
}