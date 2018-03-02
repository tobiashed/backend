<?php
// Hämta data från formuläret via metoden POST

$product    = $_POST['produkt'];
$price    = $_POST['pris'];
$fname    = $_POST['yourFname'];
$lname    = $_POST['yourLname'];
$mail    = $_POST['yourEmail'];
$address    = $_POST['yourAddress'];
$city    = $_POST['yourCity'];
$zip    = $_POST['yourZip'];
$message = $_POST['yourMsg'];
$message = wordwrap($message,70); // Lägger till radbrytningar vid långa meddelanden

// Skapa meddelandet
$message = "
Beställning från $fname $lname: \n" 
. "Produkt: "
. $product . "\nPris: "
. $price
. "\n\nLeveransadress:\n"
. $address . "\n"    
. $zip . " "
. $city    
. "\n\nMeddelande från beställaren:\n"
. $message;

// Argument som behövs i funktionen mail
$to = "tobias.hedkvist@hotmail.com";
$subject = "Order skickad av $fname $lname";
$headers = "From: noreply@webshop.se" . "\r\n" ."CC: $mail"; // Kopia till beställaren

// Kontrollera att det finns en mailadress i $_POST
if(isset($_POST['yourEmail'])){
    mail($to , $subject, $message, $headers);
    echo "<h2>Din order har skickats!</h2>";
    echo "<a href='index.php'>Till startsidan</a>";
    
}
else{
    echo "<h2>Felaktig e-mailadress!</h2>";
}
?>