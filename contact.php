
<html lang="eng">
  <head>
    <title>Hardstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./media/index.css">
  </head>

  <div class="navbar">
    <div class="heading">
      <h4>Hardstore</h4>
</div>
  <a href="login.php">Inloggen</a>
  <a href="contact.php">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Producten
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="laptops.php">Laptops</a>
      <a href="televisies.php">Televisies</a>
      <a href="telefoons.php">Telefoons</a>
    </div>
  </div> 
  <a href="index.php">Home</a>
</div>

<h1>Contact</h1>
	<div class="contactform">
  <form action="verwerken.php"  method="post">
  <input type="naam" id="naam" name="naam" placeholder="Voor- en achternaam">
  <br><input type="emailadres" id="emailadres" name="emailadres" placeholder="Emailadres">
  <br><textarea type="bericht" id="bericht" name="bericht" rows="4" cols="50" placeholder="Uw bericht"></textarea>
  <br><br><input type="submit" value="Verzenden">
</form>

  </body>
</html>