<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 3</title>
</head>
<body>
    <h1>Stränghantering</h1>    

    <?php
    // Visa varningar och felmeddelanden
    ini_set("display_errors",1);

    $fname = "Tobias";
    $lname = "Hedkvist";
    // OBS! Använd dubbla citationstecken
    echo "$fname $lname";
    echo "<br>";
    echo '$fname $lname';
    
    echo "<hr>";
    
    echo "<h2>Konkatenering</h2>";
    // Använd punkt inte plus
    echo $fname + $lname; // En varning visas
    echo "<br>";
    echo $fname ." ". $lname;
    echo "<br>";
    
    $tal1 = 123;
    $tal2 = 456;
    echo $tal1 + $tal2; // Summa
    echo "<br>";
    echo $tal1 . $tal2; // Konkatenering
    echo "<br>";
    echo "<hr>";
    
    echo "<h2>Escape-sekvenser</h2>";
    
    echo "<p>Mitt förnamn är \"Tobias\"</p>";
    echo "<p>Mitt förnamn är 'Tobias'</p>";
    echo "<p>Mitt förnamn är \'Tobias\'</p>"; // Fel!
    echo '<p>Mitt förnamn är \'Tobias\'</p>';
    
    echo "<hr>";
    
    echo "<h2>Inbyggda funktioner i PHP</h2>";
    
    $name = "tobias hedkvist";
    echo $name;
    echo "<br>";
    echo strtoupper($name);
    echo "<br>";
    echo strtolower($name);
    echo "<br>";
    echo ucfirst($name);
    echo "<br>";
    echo ucwords($name);
    echo "<br>";
    // Visa alltid inledande stor bokstav i varje ord
    echo ucwords(strtolower($name));
    echo "<br>";
    
    echo strrev($name);
    echo "<br>";
    echo strlen($name);
    echo "<br>";
    
    ?>

</body>
</html>