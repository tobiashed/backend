<?php 
    define("PAGE_TITLE", "Exempel 8");
    include "header.php";
?>

<h2>Hämta data via ett formulär och metoden GET</h2>

<form action="exempel8.php" method="get">
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
// Skriv ut allt som finns i GET-arrayen
print "<hr><h3>";
print "<pre>";
print_r($_GET);
print "</pre></h3>";

include "footer.php"; 

?>


