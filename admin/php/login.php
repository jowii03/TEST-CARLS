<?php

 include ("db.php");

	session_start();
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = md5($_POST['password']);
	$role = "admin";


    $sql = "SELECT * FROM account WHERE account_username ='$username' AND account_password='$password' AND account_type = '$role' ";
    $result = $conn->query($sql);
    $rowcount= mysqli_num_rows($result);
    if (!$result) {
		die("Sql query failed.". mysqli_error($conn));
	}

    if  (!empty($result) && $rowcount > 0) 
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['account_username'] = $row['account_username'];
		$_SESSION['account_type'] = $row['account_type'];
		echo $_SESSION['account_type'];
	}
	else{
		echo "Invalid";
		}		
