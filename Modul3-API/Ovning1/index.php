<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övning 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Arbeta med en befintlig tjänsteserver</h1>
    <h2>Alla filmer från Star Wars API</h2>

<?php
// Steg 1: hämta data (JSON) via en endpoint
$data = file_get_contents(
    "https://swapi.co/api/films/");

// Steg 2: json_decode()
// Konvertera JSON-data till en PHP-array
$array = json_decode($data, true);

// Steg 3: välj data att presentera/skriva ut
 echo "<ul>";
foreach ($array['results'] as $key => $value) {
    
    echo "<li>";
    echo $value['title'] . " " . $value['release_date'];
    echo "</li>";
}
echo "</ul>"; 

?>
</body>
</html>