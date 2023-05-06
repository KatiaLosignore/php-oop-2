<?php

require_once __DIR__ .'/Product.php';

class KennelProduct extends Product 
{
    protected $color;
    protected $size;
    public static $icon = 'fa solid fa-house';

    public function __construct($name, $brand, $code, $price, $description, Category $category, $color, $size)
    {
        parent::__construct($name, $brand, $code, $price, $description, $category);

        $this->setColor($color);
        $this->setSize($size);

    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }


}