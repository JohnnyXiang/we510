<?php
require_once "ShopProduct.php";

class ShopProductWriter {
	public function write(ShopProduct $shopProduct ) {
		$str = "{$shopProduct->title}: " . $shopProduct->getProducer() .
				" ({$shopProduct->price})\n";
		print $str;
	}
	
	public function getPrice($price){
		if( !is_double($price)){
			return;
		}
	}
	
	public function addArray(Array $array){
		
	}
}


class ErrorClass{
	
}

$product1 = new ShopProduct( "My Antonia", "Willa", "Cather", 5.99 );

$error = new ErrorClass();

$writer = new ShopProductWriter();


$writer->write( $product1 );
