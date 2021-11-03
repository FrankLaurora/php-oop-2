<?php
class Product{
    private $name;
    private $brand;
    protected $price;
    protected $category;
    private $description;

    public function __construct($_name, $_brand, $_price, $_category = null, $_description = null)
    {
        $this -> name = $_name;
        $this -> brand = $_brand;
        $this -> price = $_price;
        $this -> category = $_category;
        $this -> description = $_description;
    }
}

?>