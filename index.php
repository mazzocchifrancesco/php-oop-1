<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <?php
    require __DIR__ . '/Models/movies.php';

    $gladiator = new Movie("Gladiator", 2000, "Ridley Scott", 8);
    $the_last_samurai = new Movie("The Last Samurai", 2003, " Edward Zwick", 10);

    var_dump($gladiator);
    echo $gladiator->getFullInfo() . "<br>";
    echo $the_last_samurai->getFullInfo() . "<br>";

    ?>
</body>

</html>