<?php

class product
{
 public $name;
 public $price;
 public $currency;

 public function __construct($name, $price, $currency = "€")
 {
  $this->name = ucfirst($name);
  $this->price = $price;
  $this->currency = $currency;
 }

 public function formatPrice()
 {
  return $this->currency . number_format($this->price, 2);
 }
}

$game1 = new product(name: "Hollow Knight", price: 14.99, currency: "$");


$game2 = new product("God of War", 19.99);


$game3 = new product("The Last of Us", 24.99);

echo $game1->name . "<br>";
echo $game2->name . "<br>";
echo $game3->name . "<br>";

echo $game1->formatPrice() . "<br>";
echo $game2->formatPrice() . "<br>";
echo $game3->formatPrice() . "<br>";

var_dump($game1);
var_dump($game2);
var_dump($game3);