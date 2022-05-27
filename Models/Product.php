<?php

require __DIR__ . '/Trait/TraitProduct.php';


class Products{
    

    public function __construct($brand,$price,$name)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->name = $name;
    }
}