<?php
ini_set("display_errors", 1);

//require_once 'mixed.php';
require_once 'ShopProduct.php';
require_once 'CdProduct.php';
require_once 'BookProduct.php';

$book = new BookProduct("web development with php", "abc", "def", 19.99, 400);
$cd = new CdProduct("cd title", "cd first", "cd main", 10, "10 mins");

echo $book->title;
echo "<br/>";
echo $book->getProducer();
echo "<br/>";
echo $book->getNumberOfPages();
echo "<br/>";
$book->getSummaryLine();
echo "<br/>";
var_dump($book->price) ;




echo $cd->title;
echo "<br/>";
echo $cd->getProducer();
echo "<br/>";
echo $cd->getPlayLength(); 
echo "<br/>";
echo $cd->getSummaryLine();




//1. inherite
//2. extend
//3. overide