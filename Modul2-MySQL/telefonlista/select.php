<?php

// Logga in i databasen
require_once('connect.php');

// Skapa en SQL-sats
$query = "SELECT * FROM kontakt";

// Exekvera SQL-satsen
$table = mysqli_query($connection,$query) or die(mysqli_error($connection));

echo "<table class='table'>";
echo "<tr><th>Namn</th><th>Telefon</th><th>Ta bort</th><th>Ändra</th></tr>";

while($row = $table->fetch_assoc()){
    // Varje post (rad) skickas hit som associative array
    echo "<tr>";
    echo "<td>" . $row['namn'] . "</td>";
    echo "<td>" . $row['telefon'] . "</td>";
    echo "<td><a href='delete.php?telefon=" . $row['telefon'] . "' class='btn btn-outline-danger'>Ta bort</a></td>";
    echo "<td><a href='update.php?telefon=" . $row['telefon'] . "' class='btn btn-outline-primary'>Ändra</a></td>";
    echo "</tr>";
}

echo "</table>";




?>