<?php

require_once __DIR__ .'/Category.php';

class Product 
{
    protected$name;
    protected $brand;
    protected $code;
    protected $price;
    protected $description;
    protected $category;

    public function __construct($name, $brand, $code, $price, $description, Category $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->code = $code;
        $this->price = $price;
        $this->description = $description;
        $this->setCategory($category);
    }


    public function setCategory($category) 
    {
        if(!$category instanceof Category) return false;
        $this->category = $category;
    }
    
    public function getCategory() 
    {
        return $this->category;
    }

}

