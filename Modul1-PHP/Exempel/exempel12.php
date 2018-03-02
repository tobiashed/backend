<h1>Arbeta med sessioner (Ex12)</h1>
<h2>Starta en session</h2>
<?php
    // Sessionen måste startas på alla sidor
    session_start();
?>

<h2>Sätta en sessionsvaribel</h2>

<?php
    $_SESSION['user'] = "Tobias";
    $_SESSION['order'] = "1234";
    $_SESSION['email'] = "name@example.com";
    
    // Lagra en array i sessionen
    $_SESSION['cart'] = ['P0001', 'P0202'];

?>

<a href="exempel13.php">Nästa sida</a>