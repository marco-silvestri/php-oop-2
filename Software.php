<?php

include_once __DIR__ . '/Software.php';

class Software extends Product{
    public $os;
    public $license;
    public $link;

    function __construct($_os, $_license, $_link){
        parent::__construct($_name, $_price, $_availability, $_purchased_n_times, $_stock, $_discount = 0);
        $this->os = $_os;
        $this->license = $_license;
        $this->link = $_link;
    }
}