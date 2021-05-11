<?php
    session_start();
    include('database.php');
    $username = $_SESSION['account_username'];
    $id = $_SESSION['user_info_id'];

    if(isset($username)){

    $correct_ans  = mysqli_real_escape_string($conn, $_POST['correctAnswers']);
    $wrong_ans = mysqli_real_escape_string($conn, $_POST['wrongAnswers']); 
    $total_question = mysqli_real_escape_string($conn, $_POST['totalQuestion']);
    $percentage = mysqli_real_escape_string($conn, $_POST['percentage']);
    $date = date("Y-m-d");

    $select1 = "SELECT * FROM users_info WHERE user_info_id = '$id' ";
    $exec1 = $conn->query($select1);
 
    $select2 = "SELECT * FROM exam WHERE user_info_id = '$id'";
    $exec2 = $conn->query($select2); 
    $row = mysqli_fetch_assoc($exec2);
    $exam_id = $row['exam_id'];

    $select = "SELECT * FROM assessment WHERE user_info_id = '$id'";
    $exec = $conn->query($select);
   
        
    $sql = "INSERT INTO exam(user_info_id, total_question, wrong_answer, correct_answer, percent, total_score, exam_date) 
    VALUES ('$id', '$total_question', '$wrong_ans', '$correct_ans', '$percentage', '$correct_ans', '$date')";
    $result = $conn->query($sql);

    $sql1 = "INSERT INTO assessment(exam_id, user_info_id, assessment_score, assessment_date) 
    VALUES ('$exam_id', '$id', '$correct_ans', '$date')";
    $result1 = $conn->query($sql1);

     if($sql && $sql1){
        echo "success";
    }

    else{
        echo "Something went wrong when saving";
    }


}
   
?>