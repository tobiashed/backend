<h1>Variabler</h1>

<?php

$strang = "Tobias Hedkvist";
echo $strang;

echo "<br>";

$heltal = 99;
$flyttal = 99.95;
$boolesk = true;
$ingenting;


// Skriv ut info om variabler (används vid felsökning)
var_dump($strang);
echo "<br>";
var_dump($heltal);
echo "<br>";
var_dump($flyttal);
echo "<br>";
var_dump($boolesk);
echo "<br>";
var_dump($ingenting);
echo "<hr>";

// Testa variabbler och datatyper

echo is_string($strang); // 1 (true)
echo "<br>";
echo is_string($heltal); // Tom utskrift
echo "<br>";
echo is_int($heltal);
echo "<br>";
echo is_numeric($heltal);
echo "<br>";
$heltal = "1234567890";
// is numeric kollar om en sträng är numerisk
echo is_numeric($heltal);

?>