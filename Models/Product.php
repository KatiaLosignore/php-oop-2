<?php

require_once __DIR__ .'/Category.php';

class Product 
{
    protected $name;
    protected $brand;
    protected $code;
    protected $price;
    protected $description;
    protected $category;

    public function __construct($name, $brand, $code, $price, $description, Category $category)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setCode($code);
        $this->setPrice($price);
        $this->setDescription($description);
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }



}

