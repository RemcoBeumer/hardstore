<?php
    // Voer je hostnaam, database-gebruikersnaam, wachtwoord en databasenaam in
    // Als je geen databasewachtwoord hebt ingesteld op localhost, stelt u dit dan leeg in
    $con = mysqli_connect("localhost","admin","2op7eAtl(TDM3*gi","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>