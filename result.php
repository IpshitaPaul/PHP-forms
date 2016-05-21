<html>
<body>

<form action="data.php" method="post">

Thank you for playing the 
<?php
$conn = mysql_connect('localhost', 'root', 'ipshita');
	if(!$conn){
		die('Connect Error: ' . mysql_error());
	}
	mysql_select_db('trial_fandom');
	$score = 0;
	
if($_POST[$fan] == "HP"){
	echo "HP Quiz! <br><br>". "Your results are: <br>";
	for($x = 1; $x <= 3; $x++){
		$sql1 = "insert into hp_in(in_ans) values('$_POST["$x"]')";
		if(!mysql_query($sql1, $conn)){
			die('Error: ' . mysql_error());
		}
		$sql2 = "select qno, cor_ans, in_ans from hp_in";
		$ret = mysql_query($sql2, $conn);
		if(!$ret){
			die('Error: ' . mysql_error());
		}
		while($row = mysql_fetch_array($ret, MYSQL_ASSOC)){
			if($row['cor_ans'] == $row['in_ans']){
				$score++;
			}
		}
	}
}

else if($_POST[$fan] == "LOTR"){
	echo "LOTR quiz!<br><br>". "Your results are: <br>";
	for($x = 1; $x <= 3; $x++){
		$sql1 = "insert into lotr_in(in_ans) values('$_POST["$x"]')";
		if (!mysql_query($sql1, $conn)){
			die('Error: ' . mysql_error());
		}
		$sql2 = "select qno, cor_ans, in_ans from lotr_in";
		$ret = mysql_query($sql2, $conn);
		if(!$ret){
			die('Error: ' . mysql_error());
		}
		while($row = mysql_fetch_array($ret, MYSQL_ASSOC)){
			if($row['cor_ans'] == $row['in_ans']){
				$score++;
			}
		}
	}
}

	$sql5 = "insert into score(score) values($score)";
	$ret = mysql_query($sql5, $conn);
	if(!$ret){
		die('Error: ' . mysql_error());
	}
	echo "Score: $score/3\n";
	mysql_close($conn);	
?>

<input type="submit" value="View All Data">

</form>

</body>
</html>
