<?php

require_once 'ProductRect.php';
require_once 'ProductCirc.php';

$produitRect = new ProductRect("Table", 200, 100, 300);
$productCirc = new ProductCirc("Balloon", 5, 25);

echo '<pre>';
var_dump($produitRect);
var_dump($productCirc);
