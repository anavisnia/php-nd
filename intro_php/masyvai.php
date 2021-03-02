<?php
echo '<h3>' . 'Masyvai' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
$array = [];
// for ($i = 0; $i <= 29; $i++) {
//     $rand = rand(5, 25);
//     array_push($array, $rand);
// }
foreach(range(0, 29) as $value) {
    $array[$value] = rand(5, 25);
}
_pr($array);

//Antra
echo '<br>' . '<h3>' . 'Antra Uzduotis' . '</h3>' . '<br>';
// **********************************************************
echo 'Dalis a:' . '<br>';
$numCount = 0;
// for ($i = 0; $i < count($array); $i++) {
//     if ($array[$i] > 10) {
//         $numCount++;
//     }
// }
foreach($array as $value) {
    if ($value > 10) {
        $numCount++;
    }
}
echo "Masyve yra $numCount skaiciu/skaiciai, kurie yra diaugiau 10. <br>";

// **********************************************************
echo 'Dalis b:' . '<br>';
// $didziausiasSk = 0;
// $maziausiasSk = 0;
// for ($i = 0; $i < count($array); $i++) {
//     if ($didziausiasSk > $array[$i]) {
//         $maziausiasSk = $array[$i];
//     } else {
//         $didziausiasSk = $array[$i];
//     }
// }
$didziausiasSk1 = 0;
$maziausiasSk1 = 0;
foreach($array as $value) {
    if ($didziausiasSk1 > $value) {
        $maziausiasSk1 = $value;
    } else {
        $didziausiasSk1 = $value;
    }
}
// echo "Didziausias skaicius: $didziausiasSk. <br>";
echo "Didziausias skaicius: $didziausiasSk1. <br>";

// **********************************************************
echo 'Dalis c:' . '<br>';
$sum = 0;
// for ($i = 0; $i < count($array); $i++) {
//     $sum += $array[$i];
// }
foreach($array as $value) {
    $sum += $value;
}
echo "Suma visu skaiciu: $sum. <br>";

// **********************************************************
echo 'Dalis d:' . '<br>';
$newArr = [];
foreach ($array as $key => $value) {
    $number = $value - $key;
    array_push($newArr, $number);
}
_pr($newArr);

// **********************************************************
echo '<br>' . 'Dalis e:' . '<br>';
// for ($i = 0; $i <= 9; $i++) {
//     $rand = rand(5, 25);
//     array_push($newArr, $rand);
// }
foreach(range(30, 39) as $value) {
    $newArr[$value] = rand(5, 25);
}
_pr($newArr);

// **********************************************************
echo 'Dalis f:' . '<br>';
// $pairdArr1 = [];
// $unpairedArr1 = [];
// for ($i = 0; $i < count($newArr); $i++) {
//     if ($i % 2) {
//         array_push($unpairedArr1, $newArr[$i]);
//     } else {
//         array_push($pairdArr1, $newArr[$i]);
//     }
// }
$pairdArr = [];
$unpairedArr = [];
foreach($newArr as $key => $value) {
    if (($key % 2) === 1) {
        $unpairedArr[$key] = $value;
    } else {
        $pairdArr[$key] = $value;
    }
}
echo 'Poriniai:';
_pr($pairdArr);
echo 'Neporiniai:';
_pr($unpairedArr);


// **********************************************************
echo '<br>' . 'Dalis g:' . '<br>';
_pr($newArr);
foreach ($newArr as $index => $value) {
    if (($index % 2) === 0 && $value > 15) {
        $newArr[$index] = 0;
    }
}

echo 'Didesni uz 15 skaiciai tapo nuliu:';
_pr($newArr);


// **********************************************************
echo 'Dalis h:' . '<br>';

_pr($newArr);
$elemKey = 0;
foreach($newArr as $key => $value) {
    if ($value > 10) {
        $elemKey = $key;
        break;
    }
}
echo "Pirmasis indeksas reiksmes, kuri yra didesne uz 10: $elemKey.";

// **********************************************************
echo '<br>' . 'Dalis i:' . '<br>';
// for ($i = 0; $i < count($newArr); $i++) {
//     if ($i % 2) {
//         continue;
//     } else {
//         unset($newArr[$i]);
//     }
// }
foreach($newArr as $key => $value) {
    if (($key % 2) === 0) {
        unset($newArr[$key]);
    }
}
echo 'Istrinem visus porinius indeksus:';
_pr($newArr);

//Trecia
echo '<br>' . '<h3>' . 'Trecia Uzduotis' . '</h3>' . '<br>';
$letterArr = [];
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
// for ($i  = 0; $i < 200; $i++) {
//     $rand = rand(1, 4);
//     if ($rand === 1) {
//         array_push($letterArr, 'A');
//         $countA++;
//     } elseif ($rand === 2) {
//         array_push($letterArr, 'B');
//         $countB++;
//     } elseif ($rand === 3) {
//         array_push($letterArr, 'C');
//         $countC++;
//     } else {
//         array_push($letterArr, 'D');
//         $countD++;
//     }
// }
foreach(range(0, 199) as $value) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        $letterArr[$value] = 'A';
        $countA++;
    } elseif ($rand === 2) {
        $letterArr[$value] = 'B';
        $countB++;
    } elseif ($rand === 3) {
        $letterArr[$value] = 'C';
        $countC++;
    } else {
        $letterArr[$value] = 'D';
        $countD++;
    }
}
_pr($letterArr);
echo "Raidziu A: $countA; <br> Raidziu B: $countB; <br> Raidziu C: $countC; <br> Raidziu D: $countD;";

//Ketvirta
echo '<br>' . '<h3>' . 'Ketvirta Uzduotis' . '</h3>' . '<br>';
asort($letterArr);
_pr($letterArr);

//Penkta
echo '<br>' . '<h3>' . 'Penkta Uzduotis' . '</h3>' . '<br>';
$letterArr1 = [];
$letterArr2 = [];
$letterArr3 = [];

foreach(range(0, 199) as $value) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        $letterArr1[$value] = 'A';
    } elseif ($rand === 2) {
        $letterArr1[$value] = 'B';
    } elseif ($rand === 3) {
        $letterArr1[$value] = 'C';
    } else {
        $letterArr1[$value] = 'D';
    }
}
foreach(range(0, 199) as $value) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        $letterArr2[$value] = 'A';
    } elseif ($rand === 2) {
        $letterArr2[$value] = 'B';
    } elseif ($rand === 3) {
        $letterArr2[$value] = 'C';
    } else {
        $letterArr2[$value] = 'D';
    }
}
foreach(range(0, 199) as $value) {
    $rand = rand(1, 4);
    if ($rand === 1) {
        $letterArr3[$value] = 'A';
    } elseif ($rand === 2) {
        $letterArr3[$value] = 'B';
    } elseif ($rand === 3) {
        $letterArr3[$value] = 'C';
    } else {
        $letterArr3[$value] = 'D';
    }
}

$combinedLettersArr = [];
foreach(range(0, 199) as $value) {
    $combo = $letterArr1[$value] . $letterArr2[$value] . $letterArr3[$value];
    $combinedLettersArr[$value] = $combo;
}
_pr($combinedLettersArr);

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
// _pr($numArr2);
// print_r(array_count_values($numArr2));
// echo '</pre>';

//Septinta
echo '<br>' . '<h3>' . 'Septinta Uzduotis' . '</h3>' . '<br>';
$arrayWithNotRepeatedNum = [];

foreach($numArr1 as $key => $value) {
    if (in_array($value, $numArr2)) {
        continue;
    } else {
        $arrayWithNotRepeatedNum[$key] = $value;
    }
}
// _pr($arrayWithNotRepeatedNum);

//Astunta
echo '<br>' . '<h3>' . 'Astunta Uzduotis' . '</h3>' . '<br>';
$arrayWithRepeatedNum = [];

foreach($arrayWithNotRepeatedNum as $key => $value) {
    if (in_array($value, $numArr2)) {
        $arrayWithRepeatedNum[$key] = $value;
    } else {
        continue;
    }
}
// _pr($arrayWithRepeatedNum);

//Devinta
echo '<br>' . '<h3>' . 'Devinta Uzduotis' . '</h3>' . '<br>';
$keyValueArray = array_combine($numArr1, $numArr2);

_pr($keyValueArray);


//Desimta
echo '<br>' . '<h3>' . 'Desimta Uzduotis' . '</h3>' . '<br>';
$uniqueNumArr = [];
for ($i = 0; $i < 10; $i++) {
    if ($i <= 1) {
        $rand = rand(5, 25);
        array_push($uniqueNumArr, $rand);
    }
    if ($i > 1) {
        $sum = $uniqueNumArr[$i - 1] + $uniqueNumArr[$i - 2];
        array_push($uniqueNumArr, $sum);
    }
}
// echo '<pre>';
_pr($uniqueNumArr);
// echo '</pre>';
