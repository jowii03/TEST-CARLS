<?php

    include("database.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    if(isset($email)){
        
        $sql = "SELECT * From users_info where user_email ='$email' ";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        $acc_id = $row['account_id'];

        $sql1 = "SELECT * FROM account WHERE account_id = '$acc_id' LIMIT 1";
        $result1 = $conn->query($sql1);

        $update = "UPDATE account SET account_password = '$password' WHERE account_id ='$acc_id' LIMIT 1";
        $resultset = $conn->query($update);

        if ($resultset) {
            echo "1";
        }
        else{

           echo $conn->error;
        }

    }

    else{
        echo $email;
    }

?>