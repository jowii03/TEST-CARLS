<?php

	include 'php/database.php';

	if (isset($_GET['vkey'])) {
		//Process Verification
		$vkey = $_GET['vkey'];

		$resultset = $conn->query("SELECT verify,vkey FROM account WHERE verify = 0 AND vkey ='$vkey' LIMIT 1");

		if ($resultset->num_rows == 1) {
			//validate the email
			$update = $conn->query("UPDATE account SET verify = '1' WHERE vkey ='$vkey' LIMIT 1");
			
			if ($update) {
				echo "Your account has ben verified. Please proceed to log in.";
				header('location:login.php');
			}
			else{
				echo $conn->error;
			}
		}
		else{
			echo "This account is invalid or already verified";
		}
	}
	else{
		die("Something went wrong!");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>