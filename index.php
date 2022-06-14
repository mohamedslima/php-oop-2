<?php
require_once __DIR__ . "/animalFood.php";
require_once __DIR__ . "/animalGame.php";

$dog_food = new animalFood("Migliorcane", "bocconi", 1.50, "Cane");
$cat_food = new animalFood("Migliorgatto", "bocconi", 2, "Gatti");
$mouse_game = new animalGame("Giochi Preziosi", "giochi", 10, "plastica");

var_dump($dog_food);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cibo Per Animali</title>
</head>

<body>

    <ul>
        <li> <?php echo $cat_food->printInfo(); ?> </li>
        <li> <?php echo $dog_food->printInfo(); ?> </li>
        <li> <?php echo $mouse_game->printInfo(); ?></li>
    </ul>
</body>

</html>