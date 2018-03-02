<?php



// Hämta data från $_POST-arrayen

if(isset($_POST['name'])){
    $value = $_POST['name'];
}

//For this example, we are converting 5.50 USD into SEK.
$usd = $value;
  
//To get the SEK amount, simply multiply our USD by the SEK exchange rate.
$sek = $usd * $sekRate;

//Print out the end result using PHP's number_format function.
echo number_format($sek, 2);

// Gå till filen index.php
header('Location: index.php');


?>