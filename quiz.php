-----------------------------------------------------------------------------------------------------------------------------------------------
<html>
<body>

<form method="post" action="result.php">
Welcome <?php echo $_POST["name"]; ?>! <br>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$conn = mysql_connect('localhost', 'root', 'ipshita');
	if(!$conn){
		die('Connect Error: ' . mysql_error());
	}
	mysql_select_db('trial_fandom');
	$sql = "insert into score(name, email) values('$name', '$email')";
	$ret = mysql_query($sql, $conn);
	if(!$ret){
		die('Error: ' . mysql_error());
	}
	mysql_close($conn);
?>

You chose the
<?php
if($_POST[fandom] == "HP"){
	$fan = "HP";
	echo "HP quiz.\n\n";
	echo "Your questions are:\n";
	echo "<ol>"."<li>". "Which Hogwarts House did Luna Lovegood belong to? <br>".
	"<input type=\"radio\" name=\"1\" value=\"gryffindor\"> Gryffindor <br>".
	"<input type=\"radio\" name=\"1\" value=\"slytherin\"> Slytherin <br>".
	"<input type=\"radio\" name=\"1\" value=\"hufflepuff\"> Hufflepuff <br>".
	"<input type=\"radio\" name=\"1\" value=\"ravenclaw\"> Ravenclaw <br>";
	echo "<li>". "Where did Hermione send her parents to keep them safe in Harry Potter and the Deathly Hallows? <br>".
	"<input type=\"radio\" name=\"2\" value=\"usa\"> USA <br>".
	"<input type=\"radio\" name=\"2\" value=\"australia\"> Australia <br>".
	"<input type=\"radio\" name=\"2\" value=\"india\"> India <br>".
	"<input type=\"radio\" name=\"2\" value=\"china\"> China <br>";
	echo "<li>". "Which of the following is NOT a horcrux? <br>".
	"<input type=\"radio\" name=\"3\" value=\"sword\"> Gryffindor's sword <br>".
	"<input type=\"radio\" name=\"3\" value=\"diadem\"> Ravenclaw's diadem <br>".
	"<input type=\"radio\" name=\"3\" value=\"diary\"> Tom Riddle's diary <br>".
	"<input type=\"radio\" name=\"3\" value=\"cup\"> Hufflepuff's cup <br>";
	echo "</ol>";
}

else if($_POST[fandom] == "LOTR"){
	$fan = "LOTR";
	echo "LOTR quiz\n\n";
	echo "Your questions are: <br>";
	echo "<ol>"."<li>". "What is Pippin's full name? <br>".
	"<input type=\"radio\" name=\"1\" value=\"peregrin took\"> Peregrin Took <br>".
	"<input type=\"radio\" name=\"1\" value=\"philip took\"> Philip Took <br>".
	"<input type=\"radio\" name=\"1\" value=\"peregrin brandybuck\"> Peregrin Brandybuck <br>".
	"<input type=\"radio\" name=\"1\" value=\"peregrin baggins\"> Peregrin Baggins <br>";
	echo "<li>". "Who killed the Witch King of Angmar? <br>".
	"<input type=\"radio\" name=\"2\" value=\"eomer\"> Eomer <br>".
	"<input type=\"radio\" name=\"2\" value=\"eowyn\"> Eowyn <br>".
	"<input type=\"radio\" name=\"2\" value=\"galadriel\"> Galadriel <br>".
	"<input type=\"radio\" name=\"2\" value=\"gandalf\"> Gandalf <br>";
	echo "<li>". "How many Rings of Power were made for the Elven-kings? <br>".
	"<input type=\"radio\" name=\"3\" value=\"7\"> 7 <br>".
	"<input type=\"radio\" name=\"3\" value=\"9\"> 9 <br>".
	"<input type=\"radio\" name=\"3\" value=\"1\"> 1 <br>".
	"<input type=\"radio\" name=\"3\" value=\"3\"> 3 <br>";
	echo "</ol>";
}

?>

<input type="submit" value="Get Scores">
</form>

</body>
</html>
