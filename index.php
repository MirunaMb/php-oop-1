<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/TvSerie.php';


$production = new Production('', 'James Cameron', 1997);
$movie      = new Movie('Row', 'Johnny Deep', 1996, 1999, 120);
$tvSeries   = new TvSeries('Vikings', 'Gabriel Losky', 2008, 2009, 2020, 250, 6);

// echo "<h1>Production<h1>";
// echo "<p>" . $production->getDetails() . "</p>";

// echo "<hr><h1>Movie</h1>";
// echo "<p>" . $movie->getDetails() . "</p>";

// echo "<hr><h1>TvSeries</h1>";
// echo "<p>" . $tvSeries->getDetails() . "</p>";


$productions = [
    new Production('', 'James Cameron', 1997),
    new Movie('Row', 'Johnny Deep', 1996, 1999, 120),
    new TvSeries('Vikings', 'Gabriel Losky', 2008, 2009, 2020, 250, 6),
    new Production('Proiezione', 'James Cameron', 1997),
    new Movie('Row', 'Johnny Deep', 1996, 1999, 120),
    new TvSeries('Vikings', 'Gabriel Losky', 2008, 2009, 2020, 250, 6),
    new Production('Proiezione', 'James Cameron', 1997),
    new Movie('Row', 'Johnny Deep', 1996, 1999, 120),
    new TvSeries('Vikings', 'Gabriel Losky', 2008, 2009, 2020, 250, 6),

];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Boostrap Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Boostrap Link -->

        <link rel="stylesheet" href="./css/style.css">
        <title>MOVIE</title>

    </head>

    <body>
        <div class="container mt-5">
            <h1>Production List</h1>
            <div class="row g-3">

                <?php foreach ($productions as $production) : ?>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <?= $production->logDetails(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </body>

</html>