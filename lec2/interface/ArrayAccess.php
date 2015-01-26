<?php
class obj implements ArrayAccess,Iterator {
	private $_container = array();
	private $_position = 0;

	public function __construct() {
		$this->_position = 0;
	}

	public function offsetSet($offset, $value) {
		if (is_null($offset)) {
            $this->_container[] = $value;
        } else {
            $this->_container[$offset] = $value;
        }
	}

	public function offsetExists($offset) {
		return isset($this->_container[$offset]);
	}

	public function offsetUnset($offset) {
		unset($this->_container[$offset]);
	}

	public function offsetGet($offset) {
		return isset($this->_container[$offset]) ? $this->_container[$offset] : null;
	}


	function rewind() {
		 
		$this->_position = 0;
	}

	function current() {
		return $this->_container[$this->_position];
	}

	function key() {
		 
		return $this->_position;
	}

	function next() {
		 
		++$this->_position;
	}

	function valid() {
		 
		return isset($this->_container[$this->_position]);
	}
}

$obj = new obj;


$obj["two"] = "A value";
var_dump($obj["two"]);
$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';

foreach ($obj as $key=>$value){
	var_dump($key, $value);
    echo "\n";
}