<?php
require 'Stikline/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);
$stikline1->ipilti(200);

$stikline2->ipilti($stikline1->ispilti());
$stikline3->ipilti($stikline2->ispilti());


echo '<pre>';
var_dump($stikline1);
var_dump($stikline2);
var_dump($stikline3);