<?php
class TextProductWriter extends ShopProductWriter{
	
private  function addProduct(ShopProduct $shopProduct){
		$this->products[]=$shopProduct;
	}
	
	public  function write() {
		$str = "PRODUCTS:\n";
		foreach ( $this->products as $shopProduct ) {
			$str .= $shopProduct->getSummaryLine()."\n";
		}
		print $str;
	}
}