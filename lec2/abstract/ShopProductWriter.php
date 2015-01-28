<?php
spl_autoload_register(function ($class) {
    include  $class . '.php';
});
abstract class ShopProductWriter {
	protected $products = array();
	
	abstract  protected function addProduct( ShopProduct $shopProduct );
	
	abstract public function write();
}

$outPutType = "xml";

$product = new ShopProduct("Title","First","Main","Price");

if($outPutType =="xml"){
	$writer = new XmlProductWriter();
}else{
	$writer = new TextProductWriter();
}


$writer ->addProduct($product);
$writer->write();

