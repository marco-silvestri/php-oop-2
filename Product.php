<?php

class Product {
    public $name;
    public $price;
    public $discount;
    public $discount_price;
    public $availabilty;
    public $purchased_n_times;
    public $stock; 
    public $current_stock;

    public function __construct($_name, $_price, $_purchased_n_times, $_stock, $_discount = 0){
        $this->name = $_name;
        $this->price = $_price;
        $this->discount = $_discount;
        $this->discount_price = $this->getDiscount($this->price, $this->discount);
        $this->availability = $this->checkAvailability($this->current_stock);
        $this->purchased_n_times = $_purchased_n_times;
        $this->stock = $_stock;
        $this->current_stock = $this->getCurrentStock($this->stock, $this->purchased_n_times);
    }

    public function getDiscount($_price, $_discount){
        if ($_discount > 0){
            return $_price - ($_price * $_discount) / 100;
        } else{
            return $_price;
        }
    }

    protected function getCurrentStock($_stock, $_purchased_n_times){
        return $_stock - $_purchased_n_times;
    }

    protected function checkAvailability($_current_stock){
        if (_current_stock == 0){
            return false;
        }   else{
            return true;
        }
    }
}