<h1>Övning 3 - Fakultet (Factorial)</h1>

<form action="ovning3.php" method="get">
    Ange ett tal <br>
    <input type="number" name="tal1" required> <br>
    
    <input type="submit" value="Beräkna!">


</form>
<?php
if(isset($_GET['tal1'])){

    $num = $_GET['tal1'];
    $factorial = 1;
    for ($x=$num; $x>=1; $x--) {
        $factorial = $factorial * $x;
    }
    echo "Fakulteten av $num är $factorial";
}
?>

