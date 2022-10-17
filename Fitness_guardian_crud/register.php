<?php 
	$con = mysqli_connect("localhost","root","","user_db");
	
	$name = $_POST["name"];
	$gender = $_POST["gender"];
    $username = $_POST["username"];
	$password =$_POST["password"];

    $sql = "SELECT * FROM  register_tbl WHERE username = '$username'";
    $check = mysqli_query($con,$sql);
    if(mysqli_num_rows($check)){
        $result["message"] =  "username already exists think unique user name";
        echo json_encode($result);
    }else{
	$insertdata = "INSERT INTO register_tbl(name,gender,username,password) VALUES ('$name','$gender','$username','$password')";
	if ( mysqli_query($con, $insertdata) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}
?>