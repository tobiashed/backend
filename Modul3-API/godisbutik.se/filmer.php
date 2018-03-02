<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Filmer</title>

</head>
<body class="container">
    
    
<h2>Lista över filmer</h2>



<?php
$data = file_get_contents(
"http://localhost/Modul3-API/videobutik.se/api/movies/"
);
if(empty($data)){
echo "<h2>Problem med att hämta data!</h2>";
exit;
}

$array = json_decode($data, true);
// Testa arrayen. Vid fel kontrollera $data
if(!is_array($array)){
echo "<h2>Problem med att skapa en array!</h2>";
exit;
}

echo "<table class='table table-bordered table-striped table-sm'>";
echo "<tr><th>ID</th><th>Titel</th><th>Pris</th></tr>";
foreach ($array as $key => $value) {
echo "<tr>";
echo "<td>" . $value['filmID'] . "</td>";
echo "<td>" . $value['Titel'] . "</td>";
echo "<td>" . ($value['Pris']+5) . " kr</td>";
echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
