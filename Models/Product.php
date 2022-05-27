<?php




class Products{
    use Wherehouse;

    public function __construct($brand,$price,$name)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->name = $name;
    }
}