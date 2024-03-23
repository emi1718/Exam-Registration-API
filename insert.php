<?php
include("dbcon.php");


$arr = [];

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["nic"]) && isset($_POST["city"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $nic = $_POST["nic"];
    $city = $_POST["city"];
    
    $query = "INSERT INTO tbl_exams(name, phone, email, nic, city) VALUES ('$name','$phone','$email','$nic','$city')";

    $exce = mysqli_query($con, $query);

    if($exce) {
        $arr["success"] = true;
    } else {
        $arr["success"] = false;
    }
}

echo json_encode($arr);
?>
