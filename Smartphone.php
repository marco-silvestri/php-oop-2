<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Traits.php';

class Smartphone extends Product {
    public $brand;
    public $cpu;
    public $screen;
    public $battery;

    use Excerpt;

    function __construct($_brand, $_cpu, $_screen, $_battery){
        parent::__construct($_name, $_price, $_availability, $_purchased_n_times, $_stock, $_discount = 0);
        $this->brand = $_brand;
        $this->cpu = $_cpu;
        $this->screen = $_screen;
        $this->battery = $_battery;
    }

}