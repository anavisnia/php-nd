<?php
echo '<h3>' . 'Masyvai 2' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
$multiArr = [];
for ($i = 0; $i < 10; $i++) {
    array_push($multiArr, [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)]);
}

echo '<pre>';
print_r($multiArr);
echo '</pre>';

//Antra
echo '<br>' . '<h3>' . 'Antra Uzduotis' . '</h3>' . '<br>';
/*
Suskaičiuokite kiek masyve yra elementų didesnių už 10
*/

$numCount = 0;
for ($i = 0, $j = 0; $i < count($multiArr); $i++, $j++) {
    for ($j = 0; $j < count($multiArr[$i]); $j++) {
        if ($multiArr[$i][$j] > 10) {
            $numCount++;
        }
    }
}
echo $numCount;
