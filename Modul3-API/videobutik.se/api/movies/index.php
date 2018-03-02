<?php 

// Skapa en egen RESTful API

// Logga in i databasen
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "videobutik";
$connection = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);
if(!$connection){
    echo "<h1>Fel! <br>" . mysqli_connect_error() . "</h1>";
    exit;
}


// Tips: Lägg till denna rad för att lösa problem med svenska tecken.
mysqli_set_charset($connection, "utf8");

// Skapa en SQL-sats
$query = "SELECT * FROM film";

// Kör SQL-satsen och lagra resultatet i en variabel
$table = mysqli_query($connection , $query) or die (mysqli_error($connection));

// Skapa en array
$array = array();

// Lägg till alla filmer i arrayen
while($row = $table->fetch_assoc()){
    $array[] = $row;
}

// print_r($array);

// Skapa en JSON-string med hjälp av funktionen
// json_encode (Returns the JSON representation of a value)
// http://php.net/manual/en/function.json-encode.php
$json_string = json_encode($array, JSON_PRETTY_PRINT);

// Skriv ut JSON-Strängen
echo $json_string;

// OBS! Ingen extra info får skickas med strängen
// Såsom <pre> eller rubriker och dylikt...

?>
