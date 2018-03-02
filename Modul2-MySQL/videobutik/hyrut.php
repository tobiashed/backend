<?php


// Logga in i databasen
require_once('connect.php');

// Hämta data från $_POST-arrayen
if(isset($_POST['film']) && isset($_POST['kund'])) {

    $filmID = $_POST['film']; // namn
    $kundnummer = $_POST['kund']; // namn

    // Förbered en SQL-sats
    $sql= "INSERT INTO uthyrning (Film, Kund, utDatum, inDatum) 
    VALUES ('$filmID','$kundnummer', CURRENT_TIMESTAMP, '')";
    
    // Exekvera SQL-satsen
    mysqli_query($connection, $sql) or die(mysqli_error($connection));

}



// Gå till filen uthyrning.php
header('Location: uthyrning.php');


?>