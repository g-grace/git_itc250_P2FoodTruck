<?php
//itemClass.php

class Item{
public $quantity=0;
public $name='';
public $description='';
public $price=0.0;
    
    //create a function to run through all class as class constructor of Item
    public function Item($itemName, $itemPrice, $itemDescription) //class constructor
    {
        $this->name=$itemName;
        $this->description  = $itemDescription;
        $this->price = $itemPrice;
    
    }
    
}
?>