<?php 
include("dbcon.php");

$query = "SELECT * FROM tbl_exams";
$result = mysqli_query($con, $query);

$array = [];
while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

print(json_encode($array));
?>
