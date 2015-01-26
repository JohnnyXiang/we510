<?php
class ShopProduct {
	public $title = "default product";
	public $producerMainName = "main name";
	public $producerFirstName = "first name";
	public $price = 0;
}

$product1 = new ShopProduct();
echo $product1->title;
echo '<br/>';

$product2 = new ShopProduct();
$product1->title="My Antonia";

$product2->title = 'Catch 22';

print $product1->title;
echo '<br/>';

print $product2->title;
echo '<br/>';