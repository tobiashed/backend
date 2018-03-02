<?php 
    define("PAGE_TITLE", "Exempel 9");
    include "header.php";
?>

<h2>Skicka data till en annan fil (Exempel 10)</h2>

<form action="exempel10.php" method="get">
    Förnamn:
    <br>
    <input type="text" name="fname">
    <br>
    Efternamn:
    <br>
    <input type="text" name="lname">
    <br>
    <input type="submit" value="Visa">
</form>

<?php
       
    
        
        
?>


<?php


include "footer.php"; 

?>


