<?php
  use App\commerce\Product;
  use App\commerce\Cart;
  
 require '../vendor/autoload.php';

$product = new Product("ysl", 130);
$product1= new Product("sac", 25.99);
$product2 = new Product("basket", 90.99);

// Affichage du prix du produit
$price = $product->getPrice();
echo "Prix du produit : " . $price . "<br>";


// Affichage du produit
$product->display();
echo'<br>';
$product1->display();
echo'<br>';
$product2 ->display();
echo'<br>';
// Création d'un panier
$cart = new Cart();

// Ajout du produit au panier
$cart->addToCart($product);
$cart->addToCart($product1);
$cart->addToCart($product2);

var_dump($cart);


?>