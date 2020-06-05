<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Traits.php';

class Smartphone extends Product {
    public $brand;
    public $cpu;
    public $screen;
    public $battery;

    use Excerpt;

    function __construct($_brand, $_cpu, $_screen, $_battery, ...$params){
        parent::__construct(...$params);
        $this->brand = $_brand;
        $this->cpu = $_cpu;
        $this->screen = $_screen;
        $this->battery = $_battery;
    }

}