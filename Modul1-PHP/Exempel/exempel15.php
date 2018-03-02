<h1>Arbeta med sessioner (Ex15)</h1>
<h2>Starta en session</h2>
<?php
    // Sessionen måste startas på alla sidor
    session_start();
?>

<h2>Ta bort alla sessionsvariabler (unset)</h2>

<?php
    session_unset();
?>

<h2>Ta bort en session</h2>

<?php
    session_destroy();
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





