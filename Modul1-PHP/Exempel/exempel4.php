<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 4</title>
</head>
<body>
    <h1>Arrayer i PHP</h1>

    <?php
    // Skapa en array
    $bilar = array("Volvo", "BMW");

    // Lägg till ett element
    $bilar[] = "Toyota";

    // Indexering
    echo "<p>Jag tycker om $bilar[0] och $bilar[1]</p>";

    // Skriv ut antal element
    echo count($bilar);

    echo "<hr>";
    echo "<h2>Iterera över en array</h2>";
    
    // While loop 
    $i=0;
    while ($i < count($bilar)) {
        echo $bilar[$i++]."<br>";
    }
    echo "<br>";
    // For loop
    for ($i=0; $i < count($bilar); $i++) {
        echo $bilar[$i]."<br>";
    }
    echo "<br>";
    
    // Foreach loop
    foreach($bilar as $bil)
    echo "$bil<br>"; // OBS! [] behövs ej
    
    echo "<br>";
    
    echo "<hr>";
    echo "<h2>Skriv ut innehållet i en array</h2>";
    
    // Skriv ut hela arrayen med print_r()
    print_r($bilar);
    echo "<br>";
    
    // Snyggare utskrift
    echo"<pre>";
    print_r($bilar);
    echo"</pre>";
    
    echo "<hr>";
    echo "<h2>Skriv ut innehållet i en array som en HTML-lista</h2>";
    
    echo "<ul>";
    foreach($bilar as $bil)
    echo "<li>$bil</li>";
    echo "</ul>";
    echo "<h2>Skriv ut innehållet i en array som en HTML-tabell</h2>";
    
    echo "<table border='1'>";
    echo "<tr><th>Bilar</th></tr>";
    foreach($bilar as $bil)
    echo "<tr><td>$bil</td></tr>";
    echo "</table>";
    
    echo "<hr>";
    // Viktigt!!!
    echo "<h2>Associative array i PHP</h2>";
    $person = array("name" => "Tobias" , "age" => "38");
    echo $person["name"] . " är " . $person["age"] . " år gammal";

    echo "<br>";

    // Skriv ut associative array med foreach
    foreach($person as $p)
        echo "$p <br>";

    foreach($person as $key => $value)
        echo "Nyckel: $key, Värde: $value <br>";

    // Skriv ut hela arrayen med print_r()
    echo"<pre>";
    print_r($person);
    echo"</pre>";

    // $_SERVER är en global associative array
    // som innehåller allmän info om webbserver och dess miljö
    echo"<pre>";
    print_r($_SERVER);
    echo"</pre>";

    echo "Min root är: ";
    echo $_SERVER["DOCUMENT_ROOT"];

    ?>
    
    <br><br><br><br><br><br>
</body>
</html>