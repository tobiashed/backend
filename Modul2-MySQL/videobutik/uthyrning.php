<?php 
    define("PAGE_TITLE", "Uthyrning");
    include "header.php"; 
?>

<?php

// Logga in i databasen
require_once('connect.php');

// mysql select query för film
$sql = "SELECT Titel, filmID FROM film";
// exekvera SQL-satsen
$table = mysqli_query($connection, $sql) or die(mysqli_error($connection));
// mysql select query för film
$sqlK = "SELECT namn, kundnummer FROM kund";
// exekvera SQL-satsen
$tableK = mysqli_query($connection, $sqlK) or die(mysqli_error($connection));

?>


 <table class='table' border='1'><tr>
            
            <form action='hyrut.php' method='post'>
                
            

            <div class="form-row">
                       
            <div class="form-group col-sm-4">
                <label for="film">Film</label>
                <select id="film" name="film" class="form-control">
                    <option selected>Välj...</option>
            <?php while($row = $table->fetch_assoc()): // kolon : och endwhile; istället för klamrar {} ?>
                    <option name='filmID' value="<?php echo $row['filmID'] ?>"><?php echo $row['Titel'] ?></option>
            <?php endwhile; ?>
                </select>
            </div>           
            <div class="form-group col-sm-4">
                <label for="kund">Kund</label>
                <select id="kund" name="kund" class="form-control">
                    <option selected>Välj...</option>
            <?php while($row2 = $tableK->fetch_assoc()): // kolon : och endwhile; istället för klamrar {} ?>
                    <option name='kundnummer' value="<?php echo $row2['kundnummer'] ?>"><?php echo $row2['namn'] ?></option>
            <?php endwhile; ?>
                </select>
            </div>           
                      
                
            </div>           
                <input type='submit' value='Hyr ut' class="btn btn-outline-primary"> 
                    </form>
            
        </table>




 
 
 <?php include "footer.php" ?>
