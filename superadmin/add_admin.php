<?php  

include ('../php/database.php');


$uname=$_POST['uname'];
$pword=$_POST['pword'];	
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];

/*$file_parts = pathinfo($_FILES["image"]["name"]);
        if ($file_parts["extension"] == "gif" || $file_parts["extension"] == "png" || $file_parts["extension"] == "jpg" || $file_parts["extension"] == "jpeg") 
        {
         move_uploaded_file($_FILES["image"]["tmp_name"],"img/figure/".$_FILES["image"]["name"]);
      $admimg=basename($_FILES['image']['name']);
        }*/


mysqli_query($conn,"INSERT INTO account (account_username,account_password,account_type,verify) VALUES ('$uname','$pword','admin','1')");

    $selectid = "SELECT * FROM account WHERE account_username = '$uname'";
    $execid = $conn->query($selectid);
    $row = $execid->fetch_assoc();
    $accid = $row['account_id'];

mysqli_query($conn,"INSERT INTO admin_info (account_id,admin_lastname,admin_firstname,admin_middlename,admin_type) VALUES ('$accid','$lname','$fname','$mname','active')");

echo "<script> location.href='admin_users.php'; </script>";








?>