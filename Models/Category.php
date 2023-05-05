<?php

class Category
{
    private $label;
    private $icon;

    public function __construct($label, $icon)
    {
        $this->setLabel($label);
        $this->setIcon($icon);
    }

    

    public function setLabel($label) 
    {
        $this->label = $label;
    }
    
    public function getLabel() 
    {
        return $this->label;
    }
    
    public function setIcon($icon) 
    {
        $this->icon = $icon;
    }
    
    public function getIcon() 
    {
        return $this->icon;
    }

}
