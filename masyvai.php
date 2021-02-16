<?php
echo '<h3>' . 'Masyvai' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
$array = [];
for ($i = 0; $i <= 29; $i++) {
    $rand = rand(5, 25);
    array_push($array, $rand);
}
echo '<pre>';
print_r($array);
echo '</pre>';

//Antra
echo '<br>' . '<h3>' . 'Antra Uzduotis' . '</h3>' . '<br>';
echo 'Dalis a:' . '<br>';
$numCount = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > 10) {
        $numCount++;
    }
}
echo "Masyve yra $numCount skaiciu/skaiciai, kurie yra diaugiau 10. <br>";

echo 'Dalis b:' . '<br>';
$didziausiasSk = 0;
$maziausiasSk = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($didziausiasSk > $array[$i]) {
        $maziausiasSk = $array[$i];
    } else {
        $didziausiasSk = $array[$i];
    }
}
echo "Didziausias skaicius: $didziausiasSk. <br>";

echo 'Dalis c:' . '<br>';
$sum = 0;
for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i];
}
echo "Suma visu skaiciu: $sum. <br>";

echo 'Dalis d:' . '<br>';
$newArr = [];
foreach ($array as $key => $value) {
    $number = $value - $key;
    array_push($newArr, $number);
}

echo '<pre>';
print_r($newArr);
echo '</pre>';

echo '<br>' . 'Dalis e:' . '<br>';
for ($i = 0; $i <= 9; $i++) {
    $rand = rand(5, 25);
    array_push($newArr, $rand);
}

echo '<pre>';
print_r($newArr);
echo '</pre>';

echo 'Dalis f:' . '<br>';
$pairdArr = [];
$unpairedArr = [];
for ($i = 0; $i < count($newArr); $i++) {
    if ($i % 2) {
        array_push($unpairedArr, $newArr[$i]);
    } else {
        array_push($pairdArr, $newArr[$i]);
    }
}

echo '<pre>';
echo 'Poriniai:';
print_r($pairdArr);
echo 'Neporiniai:';
print_r($unpairedArr);
echo '</pre>';

echo 'Dalis g:' . '<br>';
for ($i = 0; $i < count($pairdArr); $i++) {
    if ($pairdArr[$i] > 15) {
        $pairdArr[$i] = 0;
    }
}

echo '<pre>';
echo 'Didesni uz 15 skaiciai tapo 0:';
print_r($pairdArr);
echo '</pre>';

echo 'Dalis h:' . '<br>';
// $elemKey = 0;
// for ($i = 0; $i < count($pairdArr); $i++) {
//     if ($pairdArr[$i] > 10) {
//         $elemKey = $i;
//         break;
//     }
// }
echo '<pre>';
print_r($newArr);
echo '</pre>';
$elemKey = 0;
for ($i = 0; $i < count($newArr); $i++) {
    if ($newArr[$i] > 10) {
        $elemKey = $i;
        break;
    }
}
echo "Pirmasis indeksas reiksmes, kuri yra didesne uz 10: $elemKey.";

echo '<br>' . 'Dalis i:' . '<br>';
for ($i = 0; $i < count($newArr); $i++) {
    if ($i % 2) {
        continue;
    } else {
        unset($newArr[$i]);
    }
}
echo 'Istrinem visus porinius indeksus:';
echo '<pre>';
print_r($newArr);
echo '</pre>';

//Trecia
echo '<br>' . '<h3>' . 'Trecia Uzduotis' . '</h3>' . '<br>';
$letterArr = [];
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
for ($i  = 0; $i < 200; $i++) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        array_push($letterArr, 'A');
        $countA++;
    } elseif ($rand === 2) {
        array_push($letterArr, 'B');
        $countB++;
    } elseif ($rand === 3) {
        array_push($letterArr, 'C');
        $countC++;
    } else {
        array_push($letterArr, 'D');
        $countD++;
    }
}
// echo '<pre>';
// print_r($letterArr);
// echo '</pre>';
echo "Raidziu A: $countA; <br> Raidziu B: $countB; <br> Raidziu C: $countC; <br> Raidziu D: $countD;";

//Ketvirta
echo '<br>' . '<h3>' . 'Ketvirta Uzduotis' . '</h3>' . '<br>';
asort($letterArr);
// echo '<pre>';
// print_r($letterArr);
// echo '</pre>';

//Penkta
echo '<br>' . '<h3>' . 'Penkta Uzduotis' . '</h3>' . '<br>';
$letterArr1 = [];
$letterArr2 = [];
$letterArr3 = [];

for ($i  = 0; $i < 200; $i++) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        array_push($letterArr1, 'A');
    } elseif ($rand === 2) {
        array_push($letterArr1, 'B');
    } elseif ($rand === 3) {
        array_push($letterArr1, 'C');
    } else {
        array_push($letterArr1, 'D');
    }
}
for ($i  = 0; $i < 200; $i++) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        array_push($letterArr2, 'A');
    } elseif ($rand === 2) {
        array_push($letterArr2, 'B');
    } elseif ($rand === 3) {
        array_push($letterArr2, 'C');
    } else {
        array_push($letterArr2, 'D');
    }
}
for ($i  = 0; $i < 200; $i++) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        array_push($letterArr3, 'A');
    } elseif ($rand === 2) {
        array_push($letterArr3, 'B');
    } elseif ($rand === 3) {
        array_push($letterArr3, 'C');
    } else {
        array_push($letterArr3, 'D');
    }
}

$combinedLettersArr = [];
for ($i = 0; $i < 200; $i++) {
    $combo = $letterArr1[$i] . $letterArr2[$i] . $letterArr3[$i];
    array_push($combinedLettersArr, $combo);
}
echo '<pre>';
print_r($combinedLettersArr);
echo '</pre>';

$unikalusCombo = array_count_values($combinedLettersArr);
foreach ($unikalusCombo as $key => $value) {
    if ($value === 1) {
        echo "Unikaslus yra: $key <br>";
    }
}

//Sesta
echo '<br>' . '<h3>' . 'Sesta Uzduotis' . '</h3>' . '<br>';
$numArr1 = [];

for ($i = 0; $i < 100; $i++) {
    $randNum = rand(100, 999);
    if (in_array($randNum, $numArr1)) {
        $randNum = rand(100, 999);
    }
    if (!in_array($randNum, $numArr1)) {
        array_push($numArr1, $randNum);
    } else {
        $randNum = rand(100, 999);
        array_push($numArr1, $randNum);
    }
}
// echo '<pre>';
// print_r($numArr1);
// print_r(array_count_values($numArr1));
// echo '</pre>';
$numArr2 = [];
for ($i = 0; $i < 100; $i++) {
    $randNum = rand(100, 999);
    if (in_array($randNum, $numArr2)) {
        $randNum = rand(100, 999);
    }
    if (!in_array($randNum, $numArr2)) {
        array_push($numArr2, $randNum);
    } else {
        $randNum = rand(100, 999);
        array_push($numArr2, $randNum);
    }
}
// echo '<pre>';
// print_r($numArr2);
// print_r(array_count_values($numArr2));
// echo '</pre>';

//Septinta
echo '<br>' . '<h3>' . 'Septinta Uzduotis' . '</h3>' . '<br>';
$arrayWithNotRepeatedNum = [];
for ($i = 0; $i < count($numArr1); $i++) {
    if (in_array($numArr1[$i], $numArr2)) {
        continue;
    } else {
        array_push($arrayWithNotRepeatedNum, $numArr1[$i]);
    }
}
echo '<pre>';
print_r($arrayWithNotRepeatedNum);
echo '</pre>';

//Astunta
echo '<br>' . '<h3>' . 'Astunta Uzduotis' . '</h3>' . '<br>';
$arrayWithRepeatedNum = [];
for ($i = 0; $i < count($numArr1); $i++) {
    if (in_array($numArr1[$i], $numArr2)) {
        array_push($arrayWithRepeatedNum, $numArr1[$i]);
    } else {
        continue;
    }
}
echo '<pre>';
print_r($arrayWithRepeatedNum);
echo '</pre>';

//Devinta
echo '<br>' . '<h3>' . 'Devinta Uzduotis' . '</h3>' . '<br>';
$keyValueArray = array_combine($numArr1, $numArr2);
echo '<pre>';
print_r($keyValueArray);
echo '</pre>';

//Desimta
echo '<br>' . '<h3>' . 'Desimta Uzduotis' . '</h3>' . '<br>';
