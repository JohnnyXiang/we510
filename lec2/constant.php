<?php
class Product{
	const IN_STOCK = 1;
	const OUT_OF_STOCK = 0;
	
	function getAvailibilty(){
		//return data from db
		return 1;
	}
	
}

$product = new Product();

if($product->getAvailibilty() == Product::IN_STOCK){
	
}