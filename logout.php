<?php
    session_start();
    // Sessie beëindigen
    if(session_destroy()) {
        // Omleiden naar startpagina
        header("Location: login.php");
    }

    include 'footer.php'
?>