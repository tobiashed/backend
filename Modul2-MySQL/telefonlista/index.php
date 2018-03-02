<!doctype html>
<html lang="sv">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tobias Telefonlista</title>
  </head>
    <body class="container">
        <h1>Tobias Telefonlista</h1>

        <form action="insert.php" method="post" class="form-inline my-3">

            <label for="name">Namn</label>
            <input type="text" id="name" name="name" class="form-control mx-2" required>
            <label for="telefon">Telefon</label>
            <input type="text" id="telefon" name="telefon" class="form-control mx-2" required>

            <button class="btn btn-outline-primary" type="submit">
                Lägg till
            </button>

        </form>

        <?php 
            include('select.php'); 
        ?>

    </body>
</html>