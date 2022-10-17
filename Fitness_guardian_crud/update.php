<?php
$con = mysqli_connect("localhost","root","","user_db");

$did = $_POST['id'];
$ddate = $_POST['date'];
$dage = $_POST['age'];
$dweight = $_POST['weight'];
$dheight = $_POST['height'];
$dbmi = $_POST['bmi'];

$result = mysqli_query($con,"UPDATE user_tbl SET Date = '$ddate',Age = '$dage',Weight = '$dweight',Height = '$dheight',Bmi = '$dbmi' WHERE Id = '$did'");


if($result)
{
    echo "successfully edited";
} else {
      echo "failed to edit";
  }

  ?>