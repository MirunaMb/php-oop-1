<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/TvSerie.php';

$production = new Production('Proiezione', 'James Cameron', 1997);
$movie      = new Movie('Film', 'James Cameron', 1997, 1999, 120);
$tvSeries   = new TvSeries('Serie', 'James Cameron', 2008, 2009, 2020, 250, 6);

echo "<h1>Production<h1>";
echo "<p>" . $production->getDetails() . "</p>";

echo ""



    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="color-scheme" content="dark">
        <link rel="stylesheet" href="./css/style.css">
        <title>MOVIE</title>
    </head>

    <body>

    </body>

</html>