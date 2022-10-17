<?php
$con = mysqli_connect("localhost","root","","user_db");

$id = $_POST['id'];
$result = array();
$query = "SELECT * FROM user_tbl WHERE Id = '$id' ";
$check = mysqli_query($con,$query); 

if (mysqli_num_rows($check)===1){
       $sql = "DELETE FROM user_tbl WHERE Id = '$id' ";
       if(mysqli_query($con,$sql)){
           $result['state'] = "delete";
           echo $result;
       }  else 
       echo "failed";
}
else{
echo "id not found";
}



?>