<?php 

	include ('database.php');

	if ($conn ->connect_error) {
		die("failed to connect server".$conn ->connect_error);
	}
session_start();
session_unset();
session_destroy();

 ?>