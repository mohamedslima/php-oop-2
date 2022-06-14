<?php
class Product {
    public $brand_name;
    public $type;
    public $price;

    function __construct($_brand_name, $_type, $_price)
    {
        $this->brand_name = $_brand_name;
        $this->type = $_type;
        $this->price = $_price;
    }

    public function printInfo() {
        return "$this->brand_name $this->type $this->price";
    }
}
?>