<h1>Arbeta med POST (Ex 17)</h1>
<h2>Hämta data via POST</h2>



<?php
    echo "<h3>";
    echo "Ditt namn är: " . $_POST['namn'] . " " . $_POST['enamn'];
    echo "</h3>";
?>
<h3>Felsökning</h3>
<?php
    print "<pre>";
    print_r($_POST);
    print "</pre>";
?>

