<?php
interface Chargeable {
	public function getPrice();
}

class Product implements Chargeable{
	public function getPrice(){
		return 10;
	}
}

class Shipping implements Chargeable{
	public function getPrice(){
		return 5;
	}
}

class PriceCalculator{
	private $_items = array();
	
	public function addChargealeItem(Chargeable $item){
		$this->_items[] = $item;
	}
	
	public function getTotal(){
		
		$total = 0;
		
		foreach ($this->_items as $item){
			$total += $item->getPrice();	
		}
		
		return $total;
	}
}


$product1 = new Product();
$product2 = new Product();
$shipping = new Shipping();

$priceCalculator = new PriceCalculator();
$priceCalculator->addChargealeItem($product1);
$priceCalculator->addChargealeItem($product2);
$priceCalculator->addChargealeItem($shipping);

echo $priceCalculator->getTotal();
