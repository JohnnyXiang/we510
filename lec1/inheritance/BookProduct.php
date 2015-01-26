<?php
require_once 'ShopProduct.php';
class BookProduct extends ShopProduct {
	public  $numPages;
	
	function __construct( $title, $firstName, $mainName, $price, $numPages ) {
		$this->numPages = $numPages;
		
		parent::__construct( $title, $firstName, $mainName, $price );
		
		
	}

	function getNumberOfPages() {
		return $this->numPages;
	}
	
	function getPrice(){
		var_dump($this->price);
	}
	
	function getSummaryLine() {
		
		$base = parent::getSummaryLine();
		
		$base .= ": page count - {$this->numPages}";
		
		return $base;
	}
}