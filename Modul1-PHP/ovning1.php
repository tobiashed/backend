<?php 
    define("PAGE_TITLE", "Övning 1");
    include "header.php" 
?>

<h2>Hämta data via URLen</h2>
<p>
    <a href="ovning1.php?tal=38">Visa 38</a> <br>
    <a href="ovning1.php?tal=110">Visa 110</a> <br>
    <a href="ovning1.php?tal=100">Visa 100</a> <br>
</p>
<h3>
    <?php
            
        if(isset($_GET['tal'])){          
            if($_GET['tal'] > 100){
                echo $_GET['tal'] . " är större än 100";
            }
            else if($_GET['tal'] < 100){
                echo $_GET['tal'] . " är mindre än 100";
            }
            else{
                echo $_GET['tal'] . " är lika med 100";
            }
        }
        else{
            echo "Data saknas";
        }
    
      
        
    ?>
</h3>

<?php include "footer.php" ?>


