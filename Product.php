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

    public function __construct($_name, $_price, $_availability, $_purchased_n_times, $_stock, $_discount = 0){
        $this->name = $_name;
        $this->price = $_price;
        $this->discount = $_discount;
        $this->discount_price = getDiscount($this->price, $this->discount);
        $this->availability = checkAvailability($this->current_stock);
        $this->purchased_n_times = $_purchased_n_times;
        $this->stock = $_stock;
        $this->current_stock = getCurrentStock($_stock, $_purchased_n_times)
    }

    public getDiscount($price, $discount){
        if ($discount > 0){
            return $price - ($price * $discount) / 100;
        } else{
            return $price;
        }
    }

    protected function getCurrentStock($stock, $purchased_n_times){
        return $stock - $purchased_n_times;
    }

    protected function checkAvailability($current_stock){
        if (current_stock == 0){
            return false;
        }   else{
            return true;
        }
    }
}