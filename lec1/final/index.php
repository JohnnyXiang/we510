<?php 
require_once 'ShopProduct.php';
require_once 'CdProduct.php';
require_once 'BookProduct.php';

$book = new BookProduct("Book Title", "OU", "Press", 20, 300);
echo $book->getTitle();