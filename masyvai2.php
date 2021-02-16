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
A:Suskaičiuokite kiek masyve yra elementų didesnių už 10
*/

$numCount = 0;
for ($i = 0, $j = 0; $i < count($multiArr); $i++, $j++) {
    for ($j = 0; $j < count($multiArr[$i]); $j++) {
        if ($multiArr[$i][$j] > 10) {
            $numCount++;
        }
    }
}
echo "A: Didesniu uz 10 yra: $numCount. <br>";

/*
B: Raskite didžiausio elemento reikšmę;
*/
$didziausiasSk = 0;
for ($i = 0; $i < count($multiArr); $i++) {
    for ($j = 0; $j < count($multiArr[$i]); $j++) {
        if ($didziausiasSk < $multiArr[$i][$j]) {
            $didziausiasSk = $multiArr[$i][$j];
        }
    }
}
echo "B: Didziausiai skaicius: $didziausiasSk.  <br>";

/*
C: Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
//neveikai
$sum = 0;
for ($i = 0, $j = 0; $i < count($multiArr[$i]); $i++, $j++) {
    $sum = $multiArr[$i][$j] + $multiArr[$i][$j] + $multiArr[$i][$j] + $multiArr[$i][$j] + $multiArr[$i][$j];
    echo $sum . '<br>';
}
