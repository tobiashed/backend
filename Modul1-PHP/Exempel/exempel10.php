<?php
if(isset($_GET['fname']) && isset($_GET['lname'])){
    $fname = htmlspecialchars($_GET['fname']);
    $lname = htmlspecialchars($_GET['lname']);
    echo "<h1>$fname $lname</h1>";
}
else{
    echo "Data saknas";
}


// Skriv ut allt som finns i GET-arrayen
/* print "<hr><h3>";
print "<pre>";
print_r($_GET);
print "</pre></h3>";
*/

?>