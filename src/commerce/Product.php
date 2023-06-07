<?php

namespace App\commerce;

class Product {
    private $name;
    private $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }// pour assigner les valeurs 

    public function getPrice(): float {
        return $this->price;
    }// s'il est accessible à l'ecriture et au lecture 

    public function display() {
        echo "" . $this->name ;
        echo "" . $this->price;
    }
}

?>