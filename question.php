<?php	
include('php/database.php');

$sql = "SELECT * FROM questionaire ORDER BY rand() LIMIT 20";
$result = $conn->query($sql);

$out = "
	<script type='text/javascript'>
		quiz = [
		";
		while($row = mysqli_fetch_assoc($result))
		{
			$out .= "
			{
				q: '".$row['question_description']."',
				options: ['".$row['question_answer_correct']."',
				'".$row['question_answer_wrong1']."', '".$row['question_answer_wrong2']."'],
				correct_answer: 0
			},
			";
		}
		$out .= "
	]
	</script>
";

echo $out;

?>