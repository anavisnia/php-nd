<?php
echo '<h3>' . 'Masyvai 2' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
$multiArr = [];
for ($i = 0; $i < 10; $i++) {
    array_push($multiArr, [rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5)]);
}

echo '<pre>';
print_r($multiArr);
echo '</pre>';
