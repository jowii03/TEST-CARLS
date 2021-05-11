<?php
session_start();
include ('../php/database.php');

if(isset($_POST["act"]))
{

	if($_POST["act"] == "Suspend"){

		$id=$_POST['id'];	
	                                
		mysqli_query($conn,"UPDATE admin_info SET admin_type = 'suspended' WHERE admin_info_id = '$id'"); 

		echo "Suspended!";	                                   
	}

	if($_POST["act"] == "Activate"){

		$id=$_POST['id'];	
	                                
		mysqli_query($conn,"UPDATE admin_info SET admin_type = 'active' WHERE admin_info_id = '$id'"); 

		echo "Activated!";	                                   
	}
}

?>