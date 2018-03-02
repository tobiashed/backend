<h1>Arbeta med sessioner (Ex14)</h1>
<h2>Starta en session</h2>
<?php
    // Sessionen måste startas på alla sidor
    session_start();
?>

<h2>Hämta en array som finns i sessionen</h2>

<?php
    // Skriv ut en hel array
    print "<pre>";
    print_r($_SESSION['cart']);
    print "</pre>";

    // Skriv ut en array som en HTML-lista
    echo "<ul>";
    foreach($_SESSION["cart"] as $product){
        echo "<li>$product</li>";
    }
    echo "</ul>";
?>

<h2>Skriv ut hela sessionen</h2>
<h3>
    <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
</h3>
<p>En session i PHP är en superglobal assiciativ array som heter $_SESSION</p>

<a href="exempel15.php">Logga ut (ta bort sessionen)</a>



