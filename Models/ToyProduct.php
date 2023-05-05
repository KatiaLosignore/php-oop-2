<?php

require_once __DIR__ .'/Product.php';

class ToyProduct extends Product 
{
    protected $materials;
    protected $color;
    protected $form;
    public static $icon = 'fa solid fa-bone';

    public function __construct($name, $brand, $code, $price, $description, Category $category, array $materials, $color, $form)
    {
        parent::__construct($name, $brand, $code, $price, $description, $category);

        $this->materials = $materials;
        $this->color = $color;
        $this->form = $form;

    }

    public function listMaterials()
    {
        return implode(', ',  $this->materials);
    }

}