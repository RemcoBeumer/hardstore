
<?php include 'header.php' ?>

<h1>Contact</h1>
	<div class="contactform">
  <form action="verwerken.php"  method="post">
  <input type="naam" id="naam" name="naam" placeholder="Voor- en achternaam">
  <br><input type="emailadres" id="emailadres" name="emailadres" placeholder="Emailadres">
  <br><textarea type="bericht" id="bericht" name="bericht" rows="4" cols="50" placeholder="Uw bericht"></textarea>
  <br><br><input type="submit" value="Verzenden">
</form>

<?php include 'footer.php' ?>