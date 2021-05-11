<?php
session_start();
include ('../php/database.php');
require_once('admin_components.php');

if(isset($_POST["action"]))
{

	if($_POST["action"] == "fetch_user"){

	  $sql = "SELECT * FROM users_info";
	  $result = $conn->query($sql);
	  $output = '
	   <div class="table-responsive">
        <table class="table display data-table text-nowrap">
            <thead>
                <tr>
                    <th>
                        <!--<div class="form-check">
                            <input type="checkbox" class="form-check-input checkAll">-->
                            <label class="form-check-label">ID</label>
                        <!--</div>-->
                    </th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
	  ';
	  while($row = mysqli_fetch_array($result))
	  {
        $bdate = new DateTime($row["user_birthdate"]);
	   $output .= '
	         <tr>
                <td>
                    <!--<div class="form-check">
                        <input type="checkbox" class="form-check-input">-->
                        <label class="form-check-label">#'.$row["user_info_id"].'</label>
                    <!--</div>-->
                </td>
                <td class="text-center"><img src="img/figure/'.$row['user_photo'].'" alt="#"></td>
                <td>'.$row["user_lastname"].', '.$row["user_firstname"].' '.$row["user_middlename"].'</td>
                <td>'.$bdate->format('Y-m-d').'</td>
                <td>'.$row["user_phonenumber"].'</td>
                <td>'.$row["user_email"].'</td>
                <td>Active</td>
                <td>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="flaticon-more-button-of-three-dots"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item btnupdate" id="'.$row["user_info_id"].'" 
                                fn="'.$row["user_firstname"].'"
                                mn="'.$row["user_middlename"].'"
                                ln="'.$row["user_lastname"].'"
                                bd="'.$bdate->format('Y-m-d').'"
                                cp="'.$row["user_phonenumber"].'"
                                em="'.$row["user_email"].'"
                            ><i class="fas fa-edit text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-ban text-red"></i>Suspend</a>
                        </div>
                    </div>
                </td>
            </tr>   
	   ';
	  }
	  $output .= '</tbody>
            </table>
        </div>';
	  echo $output;

	}

    if($_POST["action"] == "update")
     {
      $file_parts = pathinfo($_FILES["image"]["name"]);
        if ($file_parts["extension"] == "gif" || $file_parts["extension"] == "png" || $file_parts["extension"] == "jpg" || $file_parts["extension"] == "jpeg") 
        {
         move_uploaded_file($_FILES["image"]["tmp_name"],"img/figure/".$_FILES["image"]["name"]);
      $ui=basename($_FILES['image']['name']);
        }
      //$ui = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $ln = mysqli_real_escape_string($conn, $_POST["lname"]);
      $fn = mysqli_real_escape_string($conn, $_POST["fname"]);
      $mn = mysqli_real_escape_string($conn, $_POST["mname"]);
      $em = mysqli_real_escape_string($conn, $_POST["email"]);
      $cp = mysqli_real_escape_string($conn, $_POST["phone"]);
      $bd = ($_POST["bdate"]);
      //$ebrating = $_POST["bookRating"];
      //$ebprice = $_POST["bookPrice"];
      //$ebDDL = md5($_POST["bookDDL"]);
      if($ln == '' || $fn == '' || $mn == '' || $em == '' || $cp == '' || $bd == '' || $ui == ''){
        echo 'Please fill-up all fields';
        return false;
      }
      else{  
        $sql = "UPDATE users_info SET user_photo = '$ui', user_lastname = '$ln', user_firstname = '$fn', user_middlename = '$mn', user_email = '$em', user_phonenumber = '$cp', user_birthdate = '$bd' WHERE user_info_id = '".$_POST["user_id"]."'";
        if(mysqli_query($conn, $sql))
        {
         echo 'User Updated into Database';
        }
      }
     }


     //modules


     if($_POST["action"] == "updateModule")
     {
      $file_parts = pathinfo($_FILES["image"]["name"]);
        if ($file_parts["extension"] == "gif" || $file_parts["extension"] == "png" || $file_parts["extension"] == "jpg" || $file_parts["extension"] == "jpeg") 
        {
         move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$_FILES["image"]["name"]);
         $mi=basename($_FILES['image']['name']);
        }
        else{
          echo "Image format is not supported";
          return false;
        }
      $file_parts2 = pathinfo($_FILES["mFile"]["name"]);
        if ($file_parts2["extension"] == "pdf") 
        {
         move_uploaded_file($_FILES["mFile"]["tmp_name"],"modules/".$_FILES["mFile"]["name"]);
         $mf=basename($_FILES['mFile']['name']);
        }
        else{
          echo "Module format is not supported";
          return false;
        }
    
      $mn = mysqli_real_escape_string($conn, $_POST["mName"]);
      
      if($mi == '' || $mf == '' || $mn == '' ){
        echo 'Please fill-up all fields';
        return false;
      }
      else{  
        $sql = "UPDATE modules SET module_photo = '$mi', module_name = '$mn', module_file = '$mf' WHERE module_id = '".$_POST["module_id"]."'";
        if(mysqli_query($conn, $sql))
        {
         echo 'Module Updated into Database';
        }
      }
     }

     if($_POST["action"] == "insertModule")
     {
      $file_parts = pathinfo($_FILES["image2"]["name"]);
        if ($file_parts["extension"] == "gif" || $file_parts["extension"] == "png" || $file_parts["extension"] == "jpg" || $file_parts["extension"] == "jpeg") 
        {
         move_uploaded_file($_FILES["image2"]["tmp_name"],"img/".$_FILES["image2"]["name"]);
         $mi=basename($_FILES['image2']['name']);
        }
        else{
          echo "Image format is not supported";
          return false;
        }
      $file_parts2 = pathinfo($_FILES["amFile"]["name"]);
        if ($file_parts2["extension"] == "pdf") 
        {
         move_uploaded_file($_FILES["amFile"]["tmp_name"],"modules/".$_FILES["amFile"]["name"]);
         $mf=basename($_FILES['amFile']['name']);
        }
        else{
          echo "Module format is not supported";
          return false;
        }
    
      $mn = mysqli_real_escape_string($conn, $_POST["amName"]);
      
      if($mi == '' || $mf == '' || $mn == '' ){
        echo 'Please fill-up all fields';
        return false;
      }
      else{  
        $sql = "INSERT INTO modules(module_photo, module_name, module_file) VALUES('$mi', '$mn', '$mf') ";
        if(mysqli_query($conn, $sql))
        {
         echo 'Module Added into Database';
        }
      }
     }

     if($_POST["action"] == "deleteModule")
     {
      $sql = "DELETE FROM modules WHERE module_id = '".$_POST["module_id"]."'";
      if(mysqli_query($conn, $sql))
      {
       echo 'Module Deleted from Database';
      }
     }


     //questionaire



     if($_POST["action"] == "updateQuestionaire")
     {
      /*$file_parts = pathinfo($_FILES["image"]["name"]);
        if ($file_parts["extension"] == "gif" || $file_parts["extension"] == "png" || $file_parts["extension"] == "jpg" || $file_parts["extension"] == "jpeg") 
        {
         move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$_FILES["image"]["name"]);
         $mi=basename($_FILES['image']['name']);
        }
        else{
          echo "Image format is not supported";
          return false;
        }
      $file_parts2 = pathinfo($_FILES["mFile"]["name"]);
        if ($file_parts2["extension"] == "pdf") 
        {
         move_uploaded_file($_FILES["mFile"]["tmp_name"],"modules/".$_FILES["mFile"]["name"]);
         $mf=basename($_FILES['mFile']['name']);
        }
        else{
          echo "Module format is not supported";
          return false;
        }*/
    
      $aq = mysqli_real_escape_string($conn, $_POST["aq"]);
      $aca = mysqli_real_escape_string($conn, $_POST["aca"]);
      $ac1 = mysqli_real_escape_string($conn, $_POST["ac1"]);
      $ac2 = mysqli_real_escape_string($conn, $_POST["ac2"]);
      $ac3 = mysqli_real_escape_string($conn, $_POST["ac3"]);
      
      if($aq == '' || $aca == '' || $ac1 == '' || $ac2 == '' || $ac3 == ''){
        echo 'Please fill-up all fields';
        return false;
      }
      else{  
        $sql = "UPDATE questionaire SET question_description = '$aq', question_answer_correct = '$aca', question_answer_wrong1 = '$ac1', question_answer_wrong2 = '$ac2', question_answer_wrong3 = '$ac3' WHERE questionaire_id = '".$_POST["questionaire_id"]."'";
        if(mysqli_query($conn, $sql))
        {
         echo 'Question Updated into Database';
        }
      }
     }

     if($_POST["action"] == "insertQuestionaire")
     {
      /*$file_parts = pathinfo($_FILES["image2"]["name"]);
        if ($file_parts["extension"] == "gif" || $file_parts["extension"] == "png" || $file_parts["extension"] == "jpg" || $file_parts["extension"] == "jpeg") 
        {
         move_uploaded_file($_FILES["image2"]["tmp_name"],"img/".$_FILES["image2"]["name"]);
         $mi=basename($_FILES['image2']['name']);
        }
        else{
          echo "Image format is not supported";
          return false;
        }
      $file_parts2 = pathinfo($_FILES["amFile"]["name"]);
        if ($file_parts2["extension"] == "pdf") 
        {
         move_uploaded_file($_FILES["amFile"]["tmp_name"],"modules/".$_FILES["amFile"]["name"]);
         $mf=basename($_FILES['amFile']['name']);
        }
        else{
          echo "Module format is not supported";
          return false;
        }*/
    
      $aq = mysqli_real_escape_string($conn, $_POST["aaq"]);
      $aca = mysqli_real_escape_string($conn, $_POST["aaca"]);
      $ac1 = mysqli_real_escape_string($conn, $_POST["aac1"]);
      $ac2 = mysqli_real_escape_string($conn, $_POST["aac2"]);
      $ac3 = mysqli_real_escape_string($conn, $_POST["aac3"]);
      
      if($aq == '' || $aca == '' || $ac1 == '' || $ac2 == '' || $ac3 == ''){
        echo 'Please fill-up all fields';
        return false;
      }
      else{  
        $sql = "INSERT INTO questionaire(question_description, question_answer_correct, question_answer_wrong1, question_answer_wrong2, question_answer_wrong3) VALUES('$aq', '$aca', '$ac1', '$ac2', '$ac3') ";
        if(mysqli_query($conn, $sql))
        {
         echo 'Question Added into Database';
        }
      }
     }

     if($_POST["action"] == "deleteQuestionaire")
     {
      $sql = "DELETE FROM questionaire WHERE questionaire_id = '".$_POST["id"]."'";
      if(mysqli_query($conn, $sql))
      {
       echo 'Question Deleted from Database';
      }
     }

}

?>