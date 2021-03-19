<?php

require 'Krepsys.php';
require 'Grybas.php';

$grybas1 = new Grybas;
$grybas2 = new Grybas;
$grybas3 = new Grybas;
$grybas4 = new Grybas;

$krepsys1 = new Krepsys;

while($krepsys1->krepsioSvoris <= 500) 
{
    $grybas = new Grybas;
    if($grybas->getValgomas() == true && $grybas->getSukirmijes() == false) {
        $krepsys1->prideti($grybas->getSvoris());
    }
    $krepsys1->visiGrybai++;
}

echo '<pre>';
var_dump($krepsys1->krepsioSvoris);
var_dump($krepsys1);
var_dump($grybas1);
var_dump($grybas2);
var_dump($grybas3);
var_dump($grybas4);