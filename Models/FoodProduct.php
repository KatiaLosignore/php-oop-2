<?php

require_once __DIR__ .'/Product.php';

class FoodProduct extends Product
{
    protected $ingredients;
    protected $expiration;
    public static $icon = 'fa-solid fa-bowl-food';

    public function __construct($name, $brand, $code, $price, $description, Category $category, array $ingredients, $expiration)
    {
        parent::__construct($name, $brand, $code, $price, $description, $category);

        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);

    }

    public function listIngredients()
    {
        return implode(', ', $this->ingredients);
    }

    
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setExpiration($expiration)
    {
        $date= strtotime($expiration);

        if($this->isExpired($date)) return false;

        $this->expiration = $date;

    }

    public function getExpiration()
    {
        return date('d-m-Y', $this->expiration);
    }

    public function isExpired($date = null)
    { 
        $day = strtotime(date('Y-m-d'));

        if($date) return $date < $day;
        return $this->expiration < $day;
    }
}
