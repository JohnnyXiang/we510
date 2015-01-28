<?php
class Person {
	private $name;
	private $age;
	private $id;
	function __construct( $name, $age ) {
		$this->name = $name;
		$this->age = $age;
	}
	
	function setId( $id ) {
		$this->id = $id;
	}
	
	function getId(){
		return $this->id;
	}
	
	function __clone() {
		$this->id = 0;
	}
	
	function getName(){
		return $this->name;
	}
	
	function setName($name){
		$this->name = $name;
	}
}

$person = new Person( "bob", 44 );
$person->setId( 343 );


$person2 = clone $person;
$person3 = $person2;

//echo $person2->getName();


$person2->setName("Peter");

//echo $person->getName();
//echo $person2->getName();
//echo $person3->getName();
echo $person->getId();
echo "<br/>";
echo $person2->getId();