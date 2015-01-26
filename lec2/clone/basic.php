<?php
class CopyMe {}

$first = new CopyMe();

$second = clone $first;

$third = $first;

var_dump($first);
var_dump($second);
var_dump($third);
