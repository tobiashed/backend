<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Lägg till ikon i webbläsarfönstrets flik -->
    <link rel="shortcut icon" href="bilder/logo.png" />
    <title><?=PAGE_TITLE?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    footer{
        text-align: center;
    }
    </style>
</head>
<body class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Webshopen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Hem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="webshop.se/api/products/index.php">API</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewOrders.php">Admin: Se beställningar</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Jumbotron -->
    <div class="jumbotron">
        <div class="text-center">
            <h1>Välkommen till vår webshop</h1>
        </div>
    </div>