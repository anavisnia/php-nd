<?php
echo '<h3>' . 'Masyvai 2' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
// $multiArr = [];
// for ($i = 0; $i < 10; $i++) {
//     array_push($multiArr, [rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25), rand(5, 25)]);
// }

// $multidArr = [];
foreach(range(1, 10) as $index1 => $_) {
    foreach (range(1, 5) as $index2 => $_) {
        $multidArr[$index1][$index2] = rand(5, 25);
    }
}
_pr($multidArr);

//Antra
echo '<br>' . '<h3>' . 'Antra Uzduotis' . '</h3>' . '<br>';

/* *************************
A:Suskaičiuokite kiek masyve yra elementų didesnių už 10
*/
$count = 0;
foreach($multidArr as $val1) {
    foreach ($val1 as $val2) {
        if($val2 > 10) {
            $count++;
        }
    }
}
_pr("A: Didesniu uz 10 yra: $count skaiciai/skaicius.");

/* *************************
B: Raskite didžiausio elemento reikšmę;
*/
$didziausiasSk = 0;
for ($i = 0; $i < count($multidArr); $i++) {
    for ($j = 0; $j < count($multidArr[$i]); $j++) {
        if ($didziausiasSk < $multidArr[$i][$j]) {
            $didziausiasSk = $multidArr[$i][$j];
        }
    }
}
echo "B: Didziausiai skaicius: $didziausiasSk.  <br>";

/* *************************
C: Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
echo "Antra C neveikai <br>";
$sum = 0;
// foreach($multidArr as $key => $value) {

// }

/* *************************
D: Visus masyvus “pailginkite” iki 7 elementų
*/
foreach ($multidArr as $key => $_) {
    foreach(range(5, 7) as $val) {
        $multidArr[$key][$val] = rand(5, 25);
    }
}
_pr($multidArr);

//Trecia
echo '<br>' . '<h3>' . 'Trecia Uzduotis' . '</h3>' . '<br>';
$masyvas3 = [];
$rand = rand(2, 10);
// foreach (range(1, 10) as $key => $value) {
//     foreach (range(rand(2, 10), rand(2, 20)) as $key => $value)) {
//         $masyvas3[][]
//     }
// }

//Ketvirta
echo '<br>' . '<h3>' . 'Ketvirta Uzduotis' . '</h3>' . '<br>';

//Penkta
echo '<br>' . '<h3>' . 'Penkta Uzduotis' . '</h3>' . '<br>';
