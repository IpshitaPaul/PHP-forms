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
	$selectedfan = htmlspecialchars($_POST['$fan']);	

if($selectedfan == "HP"){
	echo "HP Quiz! <br><br>". "Your results are: <br>";
	for($x = 1; $x <= 3; $x++){
		$ans = mysql_real_escape_string($conn, htmlspecialchars($_POST['$x']));
		$sql1 = "insert into hp_in(in_ans) values('$ans')";
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

else if($selectedfan == "LOTR"){
	echo "LOTR quiz!<br><br>". "Your results are: <br>";
	for($x = 1; $x <= 3; $x++){
		$ans = mysql_real_escape_string($conn, htmlspecialchars($_POST['$x']));
		$sql1 = "insert into lotr_in(in_ans) values('$ans')";
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
