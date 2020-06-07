<?php

include_once __DIR__ . '/Smartphone.php';
include_once __DIR__ . '/Software.php';

$new_smartphone = new Smartphone(
    'Xiaomi', 
    '3.2 Ghz', 
    '5.5 inches', 
    '4400mAh',
    'Redmi 5', 
    299, 
    12, 
    50,
);

echo $new_smartphone->getExcerpt();