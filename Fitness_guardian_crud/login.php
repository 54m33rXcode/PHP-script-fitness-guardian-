 <?php 
	
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$con = mysqli_connect("localhost","root","","user_db");

		$sql = "SELECT * FROM register_tbl WHERE  username = '$username'";
		$response = mysqli_query($con, $sql);

		$result = array();
		$result['login'] = array();

		if ( mysqli_num_rows($response) === 1 ) {
        
			$row = mysqli_fetch_assoc($response);
	
			if ( password_verify($password, $row['password']) ) {
				
				$index['name'] = $row['name'];
				$index['gender'] = $row['gender'];
				$index['username'] = $row['username'];
				$index['id'] = $row['id'];
	
				array_push($result['login'], $index);
	
				$result['success'] = "1";
				$result['message'] = "success";
				echo json_encode($result);
	
				mysqli_close($con);
	
			} else {
	
				$result['success'] = "0";
				$result['message'] = "error";
				echo json_encode($result);
	
				mysqli_close($con);
	
			}
	
		}
?>