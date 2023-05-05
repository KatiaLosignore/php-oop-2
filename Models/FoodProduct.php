<?php

require_once __DIR__ .'/Product.php';

class FoodProduct extends Product
{
    protected $ingredients;
    protected $expiration;
    public static $icon = 'fa solid da-food';

    public function __construct($name, $brand, $code, $price, $description, Category $category, array $ingredients, $expiration)
    {
        parent::__construct($name, $brand, $code, $price, $description, $category);

        $this->ingredients = $ingredients;
        $this->setExpiration($expiration);

    }

    public function listIngredients()
    {
        return implode(', ',  $this->ingredients);
    }

    public function setExpiration($expiration)
    {
        $this->expiration = strtotime($expiration);
    }

    public function getExpiration()
    {
        return $this->expiration;
    }
}
