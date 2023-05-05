<?php

require_once __DIR__ .'/Models/Category.php';
require_once __DIR__ .'/Models/FoodProduct.php';


$category = new Category('cat', 'fa-solid fa-cat');

$product = new FoodProduct('test', 'brand', '1234', '6', 'lorem', $category, ['ingrediente1, ingrediente2'], '2023-10-10');

var_dump($product);