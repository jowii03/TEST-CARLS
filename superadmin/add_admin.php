<?php  
include ('../php/database.php');


$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$admimg=$_FILES["admimg"]["name"];
	move_uploaded_file($_FILES["admimg"]["tmp_name"],"img/figure/".$_FILES["admimg"]["name"]);
	


mysqli_query($conn,"INSERT INTO admin_info (admin_photo,admin_lastname,admin_firstname,admin_middlename,admin_status) VALUES ('$admimg','$lname','$fname','$mname','active')");

mysqli_query($conn,"INSERT INTO account (account_username,account_password,account_type,verify) VALUES ('admin','admin','admin','1')");

echo "<script> location.href='admin_users.php'; </script>";




?>