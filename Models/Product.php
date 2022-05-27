<?php

include __DIR__ . '/Trait/TraitProduct.php';


class Products{
    use brand;
    use price;
    use name;

    public function __construct($brand,$price,$name)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->name = $name;
    }
}