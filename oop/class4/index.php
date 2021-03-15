<?php
require 'Pinigine/Pinigine.php';
$pinigine1 = new Pinigine;
$pinigine1->ideti(5);
$pinigine1->ideti(1);

$pinigine2 = new Pinigine;
$pinigine2->ideti(20);
$pinigine2->ideti(1);

echo $pinigine1->skaiciuoti();
echo '<br>';
echo $pinigine2->skaiciuoti();
echo '<br>';
echo 'Banknotu: ' . Pinigine::getPoperiuKiekis();
echo '<br>';
echo 'Monetu: ' . Pinigine::getMetaliniuKiekis();
?>
