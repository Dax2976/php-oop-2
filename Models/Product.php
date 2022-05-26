<?php

class Products{
    public $brand;
    public $price;
    public $name;

    public function __construct($brand,$price,$name)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->name = $name;
    }
}