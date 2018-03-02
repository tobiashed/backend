<h1>Funktioner (Ex11)</h1>

<form action="exempel11.php" method="get">
    Ange tal 1 <br>
    <input type="number" name="tal1" required> <br>
    Ange tal 2 <br>
    <input type="number" name="tal2" required> <br>
    <input type="submit" value="Beräkna!">


</form>

<?php 
    // Skapa funktionen plus
    function plus($x, $y){
        return $x + $y;
    }
    // Skapa funktionen minus
    function minus($x, $y){
        return $x - $y;
    }

    // Hämta talen från GET-Arrayen
    if(isset($_GET['tal1']) && isset($_GET['tal2'])){
        $tal1 = $_GET['tal1'];
        $tal2 = $_GET['tal2'];

        
        echo "<h2> $tal1 + $tal2 = ";
        echo plus($tal1,$tal2);
        echo "</h2>";
        echo "<h2> $tal1 - $tal2 = ";
        echo minus($tal1,$tal2);
        echo "</h2>";
    }

?>