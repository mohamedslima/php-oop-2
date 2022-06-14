<?php
require_once __DIR__ . "/product.php";

class animalGame extends Product {
    public $animal_game;

    function __construct($_brand_name, $_type, $_price, $_animal_game)
    {
        parent::__construct($_brand_name, $_type, $_price);
        $this->animal_game = $_animal_game;
    }

    public function printInfo()
    {
        return "$this->brand_name $this->type $this->price. tipo di gioco: $this->animal_game";
    }
}
?>