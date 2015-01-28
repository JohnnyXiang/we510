<?php
require_once 'includes/bootstrap.php';

$categoryTable = new Model\Db\Table\Category();

$cats = $categoryTable->fetchAll();

$view = new View(BASE_VIEW_PATH);

$view->cats = $cats;

$view->render('index');