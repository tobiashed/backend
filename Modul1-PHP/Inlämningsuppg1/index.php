<?php 
    define("PAGE_TITLE", "Tobias webshop");
    include "header.php";
    include "products.php"; 
?>

<h2>Produkter</h2>
<div class="row">
<?php 
    // Iterera över produktarrayen för att dynamiskt kunna skapa et kort per produkt
    foreach($products as $prod){
?>

<!-- Starta en kolumn -->
<div class="col-sm-4">
    <div class="card">
        <img class="card-img-top img-fluid" src="Bilder/<?=$prod['img']?>" alt="<?=$prod['name']?>">
        <div class="card-body">
            <h5 class="card-title"><?=$prod['name']?></h5>
            <p class="card-text">Pris: <?=$prod['price']?> kr</p>
            <a href="order.php?prodID=<?=$prod['id']?>" 
            class="btn btn-primary btn-block">Köp nu</a>
        </div>
    </div>

</div><!-- avsluta en kolumn -->


<?php
} // avsluta foreach
?>
</div> <!-- row -->


    <?php include "footer.php" ?>