<h1>Arbeta med sessioner (Ex13)</h1>
<h2>Starta en session</h2>
<?php
    // Sessionen måste startas på alla sidor
    session_start();
?>

<h2>Hämta en sessionsvaribel</h2>

<?php
    echo $_SESSION['user'];
?>


<h3>Ändra en sessionsvariabel</h3>
<?php
    // Gör en ny tilldelning så ändras variabeln
    $_SESSION['user'] = "Kalle";
    echo $_SESSION['user'];
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

<a href="exempel14.php">Nästa sida</a>