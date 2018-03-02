<?php 
    define("PAGE_TITLE", "Filmer");
    include "header.php"; 
?>
        <h1>Filmer</h1>

        

        <?php 
            // Databasuppkoppling
            require_once('connect.php');
            // Skapa SQL-sats
            $query = "SELECT * FROM film";
            // Kör SQL-satsen
            $table = mysqli_query($connection,$query) or die(mysqli_error($connection));

        ?>
        
        <table class='table' border='1'><tr>
            <thead class="thead-light">
                <th>FilmID</th><th>Titel</th><th>Kategori</th><th>Huvudroll</th><th>Pris</th></tr>
                <?php while($row = $table->fetch_assoc()): // kolon : och endwhile; istället för klamrar {} ?>
                <tr>
            </thead>
            <td><?php echo $row['filmID'] ?> </td>
            <td><?php echo $row['Titel'] ?> </td>
            <td><?php echo $row['Kategori'] ?> </td>
            <td><?php echo $row['Huvudroll'] ?></td>
            <td><?php echo $row['Pris'] ?></td>
            
            </tr>
                <?php endwhile; ?>
        </table>

        

  <?php include "footer.php" ?>