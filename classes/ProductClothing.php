<?php
require_once __DIR__ . '/Product.php';

class ProductClothing{
    private $size;
    private $color;
    private $gender;

    public function __construct($_size, $_color, $_gender = "unisex")
    {
        $this -> size = $_size;
        $this -> color = $_color;
        $this -> gender = $_gender;
    }
}
?>