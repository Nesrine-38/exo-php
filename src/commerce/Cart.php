<?php
namespace App\commerce;

class Cart {
    private array $products;

    public function __construct() {
        $this->products = array();
    }
 //product = classe et $product c'est la variable 
    public function addToCart(Product $product) {
        $this->products[] = $product;// ça c'est un push en php 
    }

    public function getTotal():void{
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

    }
}

?>