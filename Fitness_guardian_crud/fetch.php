<?php

$con = mysqli_connect("localhost","root","","user_db");

$result = mysqli_query($con,"select * from user_tbl");

$data = [];

while($row = mysqli_fetch_array($result)){
    extract($row);
    $item = [
        "Id"=>$Id,
        "Date"=>$Date,
        "Age"=>$Age,
        "Weight"=>$Weight,
        "Height"=>$Height,
        "Bmi"=>$Bmi
    ];
    array_push($data,$item);

}
echo json_encode($data);
?>

