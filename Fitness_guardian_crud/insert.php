<?php

$ddate = $_POST['date'];
$dage = $_POST['age'];
$dweight = $_POST['weight'];
$dheight = $_POST['height'];
$dbmi = $_POST['bmi'];

$con = mysqli_connect("localhost","root","","user_db");

$result = mysqli_query($con,"insert into user_tbl (Date,Age,Weight,Height,Bmi) values ('$ddate','$dage','$dweight','$dheight','$dbmi')");


if($result)
{
    echo "success";
} else {
      echo "error";
  }

  ?>