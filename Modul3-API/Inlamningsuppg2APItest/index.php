<!doctype html>
<html lang="sv">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>Produkter</title>
  </head>
  <body class="container">
    

<?php

// Hämta data (JSON) via en webshopens endpoint
$data = file_get_contents(
"http://localhost/Modul3-API/Inlamningsuppg2/webshop.se/api/products/"
);

// Kontrollera data
if(empty($data)){
  echo "<h2>Problem med att hämta data!</h2>";
  exit;
}

// Konvertera JSON-data till en PHP-array
$array = json_decode($data, true);

// Testa arrayen.
if(!is_array($array)){
echo "<h2>Problem med att skapa en array!</h2>";
exit;
}

// Välj data att presentera/skriva ut (som en tabell)
echo "<h3>En tabell över alla produkter</h3>";
echo "<div class='table-responsive-sm'>";
echo "<table class='table table-bordered table-striped'>";
echo "<tr><th>Artikelnr</th><th>Namn</th><th>Beskrivning</th><th>Pris</th><th>Bild</th></tr>";
foreach ($array as $key => $value) {
  echo "<tr>";
  echo "<td>" . $value['artikelnr'] . "</td>";
  echo "<td>" . $value['namn'] . "</td>";
  echo "<td>" . $value['beskrivning'] . "</td>";
  echo "<td>" . $value['pris'] . "</td>";
  echo "<td><img src='../Inlamningsuppg2/Bilder/" . $value['bild'] . "' alt='' class='img-thumbnail' width='80px' height='80px'></td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
