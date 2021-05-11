<?php
include ('php/database.php');

ob_start();
$sql = "SELECT * FROM questionaire ORDER BY rand() LIMIT 30";
$result = mysqli_query($conn, $sql);
$data = array();

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

$question = $row['question_description'];
$correct_ans = $row['question_answer_correct'];
$wrong_ans1 = $row['question_answer_wrong1'];
$wrong_ans2 = $row['question_answer_wrong2'];

/*	$data = array (
    "question"  => array($question),
    "answers" => array($correct_ans, $wrong_ans1, $wrong_ans2)
);
	shuffle($data['answers']); */

	$data[] =   array('question' => $question);
    $data[] =   array('correct_ans' => $correct_ans);
    $data[] =   array('wrong_ans1' => $wrong_ans1);
    $data[] =   array('wrong_ans2' => $wrong_ans2);

}

ob_end_clean();
echo json_encode($data);
//echo "var getQuestion = " . (!empty($data) ? json_encode($data)  : "]") . ";";

