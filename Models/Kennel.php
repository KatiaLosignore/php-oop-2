<?php

require_once __DIR__ .'/Product.php';

class Kennel extends Product 
{
    protected $color;
    protected $size;
    public static $icon = 'fa solid fa-bed';

    public function __construct($name, $brand, $code, $price, $description, Category $category,  $color, $size)
    {
        parent::__construct($name, $brand, $code, $price, $description, $category);

        $this->color = $color;
        $this->size = $size;

    }

}