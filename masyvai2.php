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
echo "Antra C nesigavo <br>";
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

/* *************************
E: Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai 
ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, 
turinčio indeksą 0 dideliame masyve, visų elementų sumai 
*/
$arrayAntrasD = [];
$sumosMasyvas = [];
foreach ($multidArr as $antrasMasyvas) {
    $suma = 0;
    foreach ($antrasMasyvas as $num) {
        $suma += $num;
    }
    $sumosMasyvas[] = $suma;
}
_pr($sumosMasyvas);

//Trecia
echo '<br>' . '<h3>' . 'Trecia Uzduotis' . '</h3>' . '<br>';
$masyvas3 = [];
foreach(range(0, 9) as $indeks => $_) {
    foreach(range(rand(0, 2), rand(2, 20)) as $indeks2 => $_) {
        $masyvas3[$indeks][$indeks2] = chr(rand(65, 90)); // upper case random letter from A-Z
    }
}
_pr($masyvas3);

foreach($masyvas3 as &$vidMasyvas) {
    sort($vidMasyvas);
}
unset($vidMasyvas);
_pr($masyvas3);


//Ketvirta
echo '<br>' . '<h3>' . 'Ketvirta Uzduotis' . '</h3>' . '<br>';

sort($masyvas3);
_pr($masyvas3);

//Penkta
echo '<br>' . '<h3>' . 'Penkta Uzduotis' . '</h3>' . '<br>';
$masyvas5 = [];
for($i = 0; $i < 30; $i++) {
    $randId = rand(1, 1000000);
    $randPlace = rand(0, 100);
    if (!in_array($randId, $masyvas5)) {
        $masyvas5[$i] = ['user_id' => $randId, 'place_in_row' => $randPlace];
    } else {
        $randId = rand(1, 1000000);
        if (!in_array($randId, $masyvas5)) {
            $masyvas5[$i] = ['user_id' => $randId, 'place_in_row' => $randPlace];
        }
    }
}
_pr($masyvas5); //egzistuoja/veikia
 
//Sesta
echo '<br>' . '<h3>' . 'Sesta Uzduotis' . '</h3>' . '<br>';
// isrusioti pagal user_id didejancia tvarka
echo "Isrusiota pagal user_id did. tvarka:";
function compareId($id1, $id2)
{
    return $id1 <=> $id2;
}

usort($masyvas5, 'compareId');
_pr($masyvas5);

// isrusioti pagal place_in_row mazejancia tvarka
echo "Isrusiota pagal place_in_row maz. tvarka:";
function comparePlace($place1, $place2)
{
    return $place2['place_in_row'] - $place1['place_in_row'];
}

usort($masyvas5, 'comparePlace');
_pr($masyvas5);

//Septinta
echo '<br>' . '<h3>' . 'Septinta Uzduotis' . '</h3>' . '<br>';
$masyvas7 = $masyvas5;
for($i = 0; $i < count($masyvas7); $i++) {
    $randName = '';
    $randSurname = '';
    $howMamySymbN = rand(5, 15);
    $howMamySymbS = rand(5, 15);
    while (strlen($randName) <= $howMamySymbN) {
        $randName .= chr(rand(97, 122));
    }
    while (strlen($randSurname) <= $howMamySymbS) {
        $randSurname .= chr(rand(97, 122));
    }
    $masyvas7[$i]['name'] = $randName;
    $masyvas7[$i]['surname'] = $randSurname;
    
}
_pr($masyvas7);

//Astunta
echo '<br>' . '<h3>' . 'Astunta Uzduotis' . '</h3>' . '<br>';
//sukuriam masyva is 10 elementu (kurie yra tusti masyvai)
$masyvas8 = [];
for ($i = 0; $i < 10; $i++) {
    $masyvas8[$i] = [];
}

//vidiniai masyvai turi buti nuo 0 iki 5 ilgio
// jeigu iskrenta 0 - vidinio masuvo nekuriam, reiksme turi buti nuo 0 iki 10 (rand(0, 10))
// jeigu iskrenta 1-5 masyvas turi buti tokio random skaiciaus ilgio ir
// jo reiksmes turi buti atsitiktiniai skaicia nuo 0 iki 10 (gali kartotis)

for($i = 0; $i < count($masyvas8); $i++) {
    $kiekVidElementu = rand(0, 5);
    if ($kiekVidElementu === 0) {
        for ($j = 0; $j < count($masyvas8); $j++) {
            $masyvas8[$i] = rand(0, 10);
        }
    } else {
        for ($a = 0; $a < $kiekVidElementu; $a++) {
            $masyvas8[$i][$a] = rand(0, 5);
        }
    }
}
_pr($masyvas8);

//Devinta
echo '<br>' . '<h3>' . 'Devinta Uzduotis' . '</h3>' . '<br>';
