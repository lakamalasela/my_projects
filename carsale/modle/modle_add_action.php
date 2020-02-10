<?Php 

$brand_id = $_POST["brand_id"];
$name = $_POST["name"];

// $Mname = $_POST["name"];
// $color = $_POST["Cname"];
// $gearT = $_POST["gearT"];

// if($gearT=='manual'){
//     $setGear = 1;
// }else if($gearT=='auto'){
//     $setGear = 0;
// }

include("../includes/db.php");

$Sqal = "INSERT INTO model(id,name)VALUES('$brand_id ','$name')";


if(mysqli_query($conn,$Sqal)){
    echo "Save Successfully";
}else{
    echo "error:".mysqli_error($conn);
}