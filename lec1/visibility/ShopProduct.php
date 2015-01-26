<?php
class ShopProduct {
	public $title;
	public $producerMainName;
	public $producerFirstName;
	private $price;
	public $discount = 0;

	function __construct( $title, $firstName, $mainName, $price ) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}

	function getProducer() {
		return "{$this->producerFirstName}".
				" {$this->producerMainName}";
	}

	function getSummaryLine() {
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		return $base;
	}

	function setDiscount( $num ) {
		$this->discount=$num;
	}

	function getPrice() {
		return ($this->price - $this->discount);
	}


}