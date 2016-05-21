<html>
<body>

<?php
	$conn = mysql_connect('localhost', 'root', 'ipshita');
	if(!$conn){
		die('Connect Error: ' . mysql_error());
	}
	mysql_select_db('trial_fandom');
	$sql1 = "select qno, op1, op2, op3, op4, ans from hp_all_ans";
	$sql2 = "select qno, op1, op2, op3, op4, ans from lotr_all_ans";
	$sql3 = "select qno, cor_ans, in_ans from hp_in";
	$sql4 = "select qno, cor_ans, in_ans from lotr_in";
	$sql5 = "select name, email, score from score";
	$ret1 = mysql_query($sql1, $conn);
	$ret2 = mysql_query($sql2 $conn);
	$ret3 = mysql_query($sql3, $conn);
	$ret4 = mysql_query($sql4, $conn);
	$ret4 = mysql_query($sql5, $conn);
	while($row5 = mysql_fetch_array($ret5, MYSQL_ASSOC)){
		echo "Person-wise scores:\n";
		echo "Name: {$row5['name']}\n".
		"Email id: {$row5['email']}\n".
		"Score: {$row5['score']}\n\n\n";
	}
	while(($row1 = mysql_fetch_array($ret1, MYSQL_ASSOC)) && ($row2 = mysql_fetch_array($ret3, MYSQL_ASSOC))){
		echo "HP Quiz all questions and answers:\n\n";
		echo "Q{$row1['qno']} options:\n" .
		"{$row1['op1']}\n" .
		"{$row1['op2']}\n" .
		"{$row1['op3']}\n" .
		"{$row1['op4']}\n" .
		"Correct answer:\t" . "{$row1['ans']}\n" . 
		"Your answer:\t" . "{$row2['in_ans']}\n\n\n";
	}
	while(($row3 = mysql_fetch_array($ret2, MYSQL_ASSOC)) && ($row4 = mysql_fetch_array($ret4, MYSQL_ASSOC))){
		echo "LOTR Quiz all questions and answers:\n\n";
		echo "Q{$row3['qno']} options:\n" .
		"{$row3['op1']}\n" .
		"{$row3['op2']}\n" .
		"{$row3['op3']}\n" .
		"{$row3['op4']}\n" .
		"Correct answer:\t" . "{$row3['ans']}\n" . 
		"Your answer:\t" . "{$row4['in_ans']}\n\n\n";
	}	
	mysql_close($conn);
?>

</body>
</html>
