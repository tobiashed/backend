<?php 
    define("PAGE_TITLE", "Exempel 7");
    include "header.php" 
?>

<h2>Hämta data via URLen</h2>
<p>
    <a href="exempel7.php?namn=Tobias&age=38">Visa Tobias</a> <br>
    <a href="exempel7.php?namn=Kalle&age=10">Visa Kalle</a> <br>
</p>
<h3>Hej
    <?php
        // Skicka namn om det finns annars skicka tom sträng
        echo $_GET['namn'] ?? '';    
        
        if(isset($_GET['age'])){
            echo "<br>Du är " . $_GET['age'] . " år gammal";
        }
    
        
        print "<pre>";
        print_r($_GET);
        print "</pre>";
        
    ?>
</h3>

<?php include "footer.php" ?>


