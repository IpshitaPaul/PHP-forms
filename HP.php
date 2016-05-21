<html>
<body>
<form action="result_hp.php" method="post">
Welcome <?php echo "$_POST["name"]"; ?>! <br>
You chose the
<?php
if($_POST["fandom"] == "HP"){
	echo "HP";
?>
quiz. <br><br>
Your questions are: <br>
<ol>
<li> Which Hogwarts House did Luna Lovegood belong to? <br>
	<input type="radio" name="1" value="gryffindor"> Gryffindor <br>
	<input type="radio" name="1" value="slytherin"> Slytherin <br>
	<input type="radio" name="1" value="hufflepuff"> Hufflepuff <br>
	<input type="radio" name="1" value="ravenclaw"> Ravenclaw <br>
<li> Where did Hermione send her parents to keep them safe in Harry Potter and the Deathly Hallows? <br>
	<input type="radio" name="2" value="usa"> USA <br>
	<input type="radio" name="2" value="australia"> Australia <br>
	<input type="radio" name="2" value="india"> India <br>
	<input type="radio" name="2" value="china"> China <br>
<li> Which of the following is NOT a horcrux? <br>
	<input type="radio" name="3" value="sword"> Gryffindor's sword <br>
	<input type="radio" name="3" value="diadem"> Ravenclaw's diadem <br>
	<input type="radio" name="3" value="diary"> Tom Riddle's diary <br>
	<input type="radio" name="3" value="cup"> Hufflepuff's cup <br>
</ol>
<input type="submit" value="Submit">
</form>

</body>
</html>
