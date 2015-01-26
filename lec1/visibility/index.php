<?php
require_once 'ShopProduct.php';
//require_once 'CdProduct.php';
//require_once 'BookProduct.php';

$product = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);

$product->setDiscount(1);

echo $product->getPrice() . "<br/>";
echo "The price is {$product->price} <br/>";
