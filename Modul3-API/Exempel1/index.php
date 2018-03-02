<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    div{
        padding:10px;
        margin:10px;
        width:200px;
        height:200px;
        border:1px double grey;
        float:left;
    }
</style>
</head>
<body class="container">
    <h1>Arbeta med en befintlig tjänsteserver</h1>
    <h2>Hämta en lista på alla namn</h2>

<?php
// Steg 1: hämta data (JSON) via en endpoint
$data = file_get_contents("https://jsonplaceholder.typicode.com/users");

/* Skriv ut allting för att testa
echo "<pre>";
echo $data;
echo "</pre>"; */

// Steg 2: json_decode()
// Konvertera JSON-data till en PHP-array
// http://php.net/manual/en/function.json-decode.php
$array = json_decode($data, true);
// OBS! Argumentet true skapar en associativ array

// Testa att skriva ut arrayen
/* echo "<hr><pre>";
print_r($array);
echo "</pre><hr>"; */

// Steg 3: välj data att presentera/skriva ut
echo "<br>";
echo "<h3>En enkel lista</h3>";
foreach($array as $key => $value){
    echo $value['name'];
    echo "<br>";
    
}

// Skriv ut en tabell med namn och email
echo "<br>";
echo "<h3>En tabell över namn och e-post</h3>";
echo "<table class='table table-bordered table-striped'>";
echo "<tr><th>Namn</th><th>E-post</th></tr>";
foreach ($array as $key => $value) {
    echo "<tr>";
    echo "<td>" . $value['name'] . "</td>";
    echo "<td>" . $value['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Skriv ut adressetiketter
echo "<br>";
echo "<h3>Adressetiketter</h3>";
foreach ($array as $key => $value) {
    echo "<div>";
    echo "<h4>" . $value['name'] . "</h4>";
    echo $value['address']['street'] . "<br>";
    echo $value['address']['suite'] . "<br>";
    echo $value['address']['zipcode'] . "<br>";
    echo $value['address']['city'] . "<br>";
    echo "</div>";
    } 
?>
</body>
</html>
