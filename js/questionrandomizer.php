<?php
include ('database.php');

ob_start();
$sql = "SELECT * FROM questionaire ORDER BY rand() LIMIT 10";
$result = mysqli_query($conn, $sql);
$data = array();
echo "KAHIT ANO";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	 $id = $row['questionaire_id'];
	 $data[] = array('id' => $id ); 

}

ob_end_clean();
echo json_encode($data);

//echo "var getQuestion = " . (!empty($data) ? json_encode($data)  : "]") . ";";
