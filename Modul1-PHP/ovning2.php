<?php
function x2($x){
    return $x * $x;
}
function skapaTabell() {
    // Börja med att generera en table som har kantlinjer med 1px
    echo "<table border='1px'>";
    // Tabellens header
    echo "<tr><th>x</th><th>x2</th></tr>";
    
  
    // Använd en FOR-loop för att generara data och bestäm höjd
    for ($x = 1; $x < 101; $x++) {
      
      echo "<tr><td><center>" . $x  . "</center></td><td><center>" . x2($x) . "</center></td></tr>";
     
    }
    // Avsluta tabell
    echo "</table>";
  }

    skapaTabell();

?>