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
    <h2>Valutaomvandlare fixer.io</h2>

<form action='index.php' method='post'>
      Växla: <input type='number' name='number' id='number' required>
      $ till <input type='button' name='button' value='SEK' onclick=''>
    </form>
    <p id='demo'></p>



</body>
</html>
<?php
 
 //We set USD as our base currency.
 $baseCurrency = 'USD';
  
 //The API URL for our USD to foreign currency exchange rates.
 $apiUrl = "http://api.fixer.io/latest?base=$baseCurrency";
  
 //Make the API call.
 $content = file_get_contents($apiUrl);
  
 //Make sure that the API call was successful before continuing.
 if($content === false){
     throw new Exception('Unable to connect to API.');
 }
  
 //Decode the currency rates from JSON into an associative array.
 $currencyRates = json_decode($content, true);
  
 //Make sure that the JSON is valid before continuing.
 if(!is_array($currencyRates)){
     throw new Exception('Unable to decode JSON.');
 }
  
 //In this case, we want the USD to SEK exchange rate.
 $sekRate = $currencyRates['rates']['SEK'];


 if(isset($_POST['name'])){
    $value = $_POST['name'];
    
    //For this example, we are converting 5.50 USD into SEK.
    $usd = $value;
      
    //To get the SEK amount, simply multiply our USD by the SEK exchange rate.
    $sek = $usd * $sekRate;
    
    //Print out the end result using PHP's number_format function.
    echo number_format($sek, 2);
}
     
?>