<?php 
include("dbcon.php");
$array=[];

if(isset($_POST["id"])){
    $id=$_POST["id"];

    $query = "DELETE FROM tbl_exams WHERE id = $id";

    $exec = mysqli_query($con,$query);

    if($exec){
        $array["success"]=true;
    } else {
        $array["success"]=false;
    }

    print(json_encode($array));
}
?>
