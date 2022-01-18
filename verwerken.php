
<?php include 'header.php' ?>

<h1>Bedankt voor het contact opnemen!</h1>
	
	<?php
	
	$naam = $_POST["naam"];
	$emailadres = $_POST["emailadres"];
	$bericht = $_POST["bericht"];
	
	echo "<b>Voor- en achternaam</b>: <i>$naam</i>";
	echo "<br><b>Emailadres</b>: <i>$emailadres</i>";
	echo "<br><b>Uw bericht</b>: <i>$bericht</i>";

	?>

<?php include 'footer.php' ?>