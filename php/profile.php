<?php
	include ('database.php');
	session_start();
	$acc_user = $_SESSION['account_username'];

	if (isset($acc_user)) {

		$sql = "SELECT * FROM account WHERE account_username = '$acc_user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$rowid = $row['account_id'];
		$sql1 = "SELECT * FROM users_info WHERE account_id = '$rowid'";
		$result1 = $conn->query($sql1);
		$rowcount1 = mysqli_num_rows($sql1);

		
		echo "wew";
	}
	

?>

