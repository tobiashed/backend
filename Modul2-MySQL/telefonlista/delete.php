<?php

// Hämta innehållet i filen connect.php
// require visar felmeddelande om filen saknas det gör inte include

// Logga in i databasen
require_once('connect.php');


if(isset($_GET['telefon'])){ // Hämta data via URLen (med GET)
    $telefon = $_GET['telefon'];
    // Skapa SQL-satsen
    $query = "DELETE FROM kontakt WHERE telefon = '$telefon'";
    // Exekvera SQL-satsen
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    }

// Gå till filen index.php
header('Location: index.php');


?>