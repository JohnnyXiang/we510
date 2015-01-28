<?php
spl_autoload_register(function ($class) {
    include  $class . '.php';
});

class StaticExample {
	static public $aNum = 0;
	static public function sayHello() {
		self::$aNum++;		
		print "hello";
	}
}

print StaticExample::$aNum;
StaticExample::sayHello();
print StaticExample::$aNum;

echo Inflector::pluralize("book");
echo Inflector::ucfirst("BOOK");

