<?php

// Hämta innehållet i filen connect.php
// require visar felmeddelande om filen saknas det gör inte include

// Logga in i databasen
require_once('connect.php');

// Hämta data från $_POST-arrayen

if(isset($_POST['name'])){
    $namn = $_POST['name'];
}
if(isset($_POST['telefon'])){
    $telefon = $_POST['telefon'];
}

// Förbered en SQL-sats
$sql= "INSERT INTO kontakt VALUES ('$namn', '$telefon')";

// Exekvera SQL-satsen
mysqli_query($connection, $sql) or die(mysqli_error($connection));

// Gå till filen index.php
header('Location: index.php');


?>