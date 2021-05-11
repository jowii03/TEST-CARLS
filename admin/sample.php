<?php
include ('php/db.php');

$sql = "SELECT * FROM questionaire	ORDER BY rand() LIMIT 30";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<table>
<tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
        printf ("%s (%s) (error: %s) (error: %s)\n<br>", $row["question_description"], $row["question_answer_correct"], $row["question_answer_wrong1"],$row["question_answer_wrong2"]);
    }

?>
</tr>
</table>