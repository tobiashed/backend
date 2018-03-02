<?php 
    define("PAGE_TITLE", "Videobutiken");
    include "header.php"; 
?>
        <h1>Videobutik</h1>

        

        <?php 
            // Databasuppkoppling
            require_once('connect.php');
            // Skapa SQL-sats
            $query = "SELECT U.uthyrningsID, K.namn, F.Titel, U.utDatum
            FROM Kund K, Film F, Uthyrning U
            WHERE U.inDatum IS NULL
            AND K.kundnummer = U.Kund
            AND F.filmID = U.Film
            ORDER BY U.utDatum";
            // Kör SQL-satsen
            $table = mysqli_query($connection,$query) or die(mysqli_error($connection));

        ?>
        <h3>Uthyrda filmer (ej återlämnade)</h3>
        <table class='table' border='1'><tr>
            <thead class="thead-light">
                <th>UthyrningsID</th><th>Kund</th><th>Film</th><th>Uthyrningsdatum</th><th>Lämna tillbaka</th></tr>
                <?php while($row = $table->fetch_assoc()): // kolon : och endwhile; istället för klamrar {} ?>
                <tr>
            </thead>
            <td><?php echo $row['uthyrningsID'] ?> </td>
            <td><?php echo $row['namn'] ?> </td>
            <td><?php echo $row['Titel'] ?> </td>
            <td><?php echo $row['utDatum'] ?></td>
            <td>    <form action='update.php' method='post'><input type='hidden' name='uthyrningsID' value="<?php echo $row['uthyrningsID'] ;?>">
                    <input type='hidden' name='namn' value="<?php echo $row['namn'] ;?>">
                    <input type='hidden' name='Titel' value="<?php echo $row['Titel'] ;?>">
                    <input type='hidden' name='utDatum' value="<?php echo $row['utDatum'] ;?>">
                    <input type='submit' value='Lämna tillbaka' class="btn btn-outline-danger">
                    </form>
            </td>
            </tr>
                <?php endwhile; ?>
        </table>

        <?php include "footer.php" ?>

