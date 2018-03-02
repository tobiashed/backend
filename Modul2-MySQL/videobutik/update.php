<?php


// Logga in i databasen
require_once('connect.php');

// Hämta data från $_POST-arrayen

if(isset($_POST['uthyrningsID']) && isset($_POST['namn']) && isset($_POST['Titel']) && isset($_POST['utDatum'])){
    $uthyrningsID = $_POST['uthyrningsID']; // namn
    $namn = $_POST['namn']; // namn
    $Titel = $_POST['Titel']; // namn
    $utDatum = $_POST['utDatum'];

    // Förbered en SQL-sats
    $sql="UPDATE uthyrning SET inDatum = CURRENT_TIMESTAMP
    WHERE uthyrningsID = $uthyrningsID";
    
    // Exekvera SQL-satsen
    mysqli_query($connection, $sql) or die(mysqli_error($connection));

}



// Gå till filen index.php
header('Location: index.php');


?>