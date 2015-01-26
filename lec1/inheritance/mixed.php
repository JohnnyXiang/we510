<?php
class ShopProduct {
	//for books
	public $numPages;

	//for cds
	public $playLength;

	//shared
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;
	public $type;

	function __construct( $title, $firstName,$mainName, $price, $numPages=0, $playLength=0 ) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
		$this->numPages = $numPages;
		$this->playLength = $playLength;
		
		if($numPages >0 ){
			$this->type = "book";
		}else{
			$this->type = "cd";
		}
	}
	/**
	 * For books
	 */
	function getNumberOfPages() {
		return $this->numPages;
	}

	/**
	 * Get CD play length
	 */
	function getPlayLength() {
		return $this->playLength;
	}

	function getProducer() {
		return "{$this->producerFirstName}".
				" {$this->producerMainName}";
	}

	function getSummaryLine() {
		$base = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";
		if ( $this->type == 'book' ) {
			$base .= ": page count - {$this->numPages}";
		} else if ( $this->type == 'cd' ) {
			$base .= ": playing time - {$this->playLength}";
		}
		return $base;
	}


}