<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Arbeta med en befintlig tjänsteserver</h1>
    <h2>Hämta slumpmässiga namn från namnapi.se</h2>

<?php
// Steg 1: hämta data (JSON) via en endpoint
$data = file_get_contents(
    "http://api.namnapi.se/v2/names.json?limit=10" );

// Steg 2: json_decode()
// Konvertera JSON-data till en PHP-array
$array = json_decode($data, true);

// Steg 3: välj data att presentera/skriva ut
foreach($array['names'] as $key => $value){
    echo $value['firstname'] . " " ;
    echo $value['surname'] . "<br>";
    }

?>
</body>
</html>