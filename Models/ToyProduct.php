<?php

require_once __DIR__ .'/Product.php';

class ToyProduct extends Product 
{
    protected $materials;
    protected $color;
    protected $form;
    public static $icon = 'fa-solid fa-bone';

    public function __construct($name, $brand, $code, $price, $description, Category $category, array $materials, $color, $form)
    {
        parent::__construct($name, $brand, $code, $price, $description, $category);

        $this->setMaterials($materials);
        $this->setColor($color);
        $this->setForm($form);

    }

    public function listMaterials()
    {
        return implode(', ', $this->materials);
    }

    
    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setForm($form)
    {
        $this->form = $form;
    }

    public function getForm()
    {
        return $this->form;
    }


}