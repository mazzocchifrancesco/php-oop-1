<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <?php
    // importo file array 

    require __DIR__ . '/Models/movies.php';
    require 'dati.php';


    //stampo i dati

    var_dump($movies);
    echo $gladiator->getFullInfo() . "<br>";
    echo $the_last_samurai->getFullInfo() . "<br>";

    ?>
</body>

</html>