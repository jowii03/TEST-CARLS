<?php

	include ('database.php');
	session_start();

	$username = mysqli_real_escape_string($conn, $_POST["username"]);
	$password = md5($_POST["password"]);

	if (isset($username)){
	$sql = "SELECT * FROM account WHERE account_username = '$username' AND account_password ='$password'";
	$result = $conn->query($sql);
	$rowcount= mysqli_num_rows($result);		
	
	if (!$result) {
		die("Sql query failed.". mysqli_error($conn));
	}

	if  (!empty($result) && $result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();
		$verified = $row['verify'];
		$user = $row['account_username'];
		$accid = $row['account_id'];

		if ($verified == '1') {		
			
			$sql1 = "SELECT * FROM users_info WHERE account_id = '$accid'";
			$result1 = $conn->query($sql1);
			$rows = mysqli_fetch_assoc($result1);
			
			echo "1";
			$_SESSION['account_username'] = $row['account_username'];
			$_SESSION['user_info_id'] = $rows['user_info_id'];
		}
		else if($verified == '0'){
			echo "0";
		}
		else{
		echo "Invalid";
	}		
	}
	
}
?>