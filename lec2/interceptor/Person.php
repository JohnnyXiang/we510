<?php
class PersonWriter {

	function writeName( Person $p ) {
		print $p->getName()."\n";
	}

	function writeAge( Person $p ) {
		print $p->getAge()."\n";
	}
}

class Person {
	private $_name;
	private $_age;
	private $writer;

	function __construct( PersonWriter $writer ) {
		$this->writer = $writer;
	}

	function __set( $property, $value ) {
		$method = "set{$property}";
		if ( method_exists( $this, $method ) ) {
			return $this->$method( $value );
		}
	}

	function __get( $property ) {
		$method = "get{$property}";
		if ( method_exists( $this, $method ) ) {
			return $this->$method();
		}
	}

	function __call( $methodname, $args ) {
		
		if ( method_exists( $this->writer, $methodname ) ) {
			return $this->writer->$methodname( $this );
		}
	}

	function getName() {
		return $this->_name;
	}

	function setName( $name ) {
		$this->_name = $name;
		if ( ! is_null( $name ) ) {
			$this->_name = strtoupper($this->_name);
		}
	}

	function getAge() {
		return $this->_age;
	}

	function setAge( $age ) {
		$this->_age = strtoupper($age);
	}

	
	function writeName() {
		$this->writer->writeName( $this );
	}
	
}

$person = new Person( new PersonWriter() );
$person->serName("Peter");
$person->setAge(11);
$person->writeName();