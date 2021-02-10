<?php
// pirma uzduotuis
echo '<h3>' . 'Pirma uzduotis:' . '</h3>' . '<br>';
$vardas = 'Ana';
$pavarde = 'Visnevskaja';
$gimimoData = 1997;
$dabartiniaiMetai = 2021;
$amzius = $dabartiniaiMetai - $gimimoData;
echo "As esu $vardas $pavarde. Man yra $amzius metai.";
echo '<br>';

// antra uzduotuis
echo '<h3>' . 'Antra uzduotis:' . '</h3>' . '<br>';
$num1 = rand(0, 4);
$num2 = rand(0, 4);
echo "Pirmas sakicius: $num1";
echo '<br>';
echo "Antras skaicius: $num2";
echo '<br>';

// if ($num1 > $num2 || $num1 === $num2) {
//     if ($num1 !== 0 || $num2 !== 0) {
//         echo 'Pabaiga';
//         return;
//     }
//     $dev = $num1 / $num2;
//     echo round($dev, 2);
// } elseif ($num2 > $num1) {
//     if ($num1 !== 0 || $num2 !== 0) {
//         echo 'Pabaiga';
//         return;
//     }
//     $dev = $num2 / $num1;
//     echo round($dev, 2);
// }

if ($num1 !== 0 && $num2 !== 0) {
    if ($num1 > $num2 || $num1 === $num2) {
        $dev = $num1 / $num2;
        echo round($dev, 2);
    } elseif ($num2 > $num1) {
        $dev = $num2 / $num1;
        echo round($dev, 2);
    }
} else if ($num1 === 0 || $num2 === 0) {
    echo 'Dalinti negalima!';
}

// trecia uzduotis
echo '<br>';
echo '<h3>' . 'Trecia uzduotis:' . '</h3>' . '<br>';
$random1 = rand(0, 25);
$random2 = rand(0, 25);
$random3 = rand(0, 25);
echo "Pirmas skaicius: $random1. Antras skaicius: $random2. Trecias skaicius: $random3.";
echo '<br>';
if ($random1 === 12) {
    echo 'Radau, tai yra $random1: ' . $random1;
}
if ($random2 === 12) {
    echo 'Radau, tai yra $random2: ' . $random2;
}
if ($random3 === 12) {
    echo 'Radau, tai yra $random3: ' . $random3;
}
echo '<br>';

// ketvirta uzduotis
echo '<h3>' . 'Ketvirta uzduotis:' . '</h3>' . '<br>';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "a = $a, b = $b, c = $c";
echo '<br>';
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Toks trikampis gali buti nubrazitas. Kintamasis a = $a, kintamasis b = $b, kintamasis c = $c.";
} else {
    echo 'Negalima nubraiziti toki trikampi!';
}
echo '<br>';

// penkta uzduotis
echo '<h3>' . 'Penkta uzduotis:' . '</h3>' . '<br>';
$kint1 = rand(0, 2);
$kint2 = rand(0, 2);
$kint3 = rand(0, 2);
$kint4 = rand(0, 2);
$countZero = 0;
$countOne = 0;
$countTwo = 0;
echo "Pirmas skaicius: $kint1. Antras skaicius: $kint2. Trecias skaicus: $kint3. Ketvirtas skaicius: $kint4.";
echo '<br>';

if ($kint1 === 0) {
    $countZero++;
} elseif ($kint1 === 1) {
    $countOne++;
} elseif ($kint1 === 2) {
    $countTwo++;
}

if ($kint2 === 0) {
    $countZero++;
} elseif ($kint2 === 1) {
    $countOne++;
} elseif ($kint2 === 2) {
    $countTwo++;
}

if ($kint3 === 0) {
    $countZero++;
} elseif ($kint3 === 1) {
    $countOne++;
} elseif ($kint3 === 2) {
    $countTwo++;
}

if ($kint4 === 0) {
    $countZero++;
} elseif ($kint4 === 1) {
    $countOne++;
} elseif ($kint4 === 2) {
    $countTwo++;
}
echo "Nuliu yra: $countZero. Veinetu yra: $countOne. Dvejetu yra: $countTwo.";
echo '<br>';

echo '<br>';
// septinta uzduotis
echo '<h3>' . 'Sesta uzduotis:' . '</h3>' . '<br>';
$atvaizduotiKintamaji = rand(1, 6);
echo '<h' . $atvaizduotiKintamaji . '>' . $atvaizduotiKintamaji . '</h' . $atvaizduotiKintamaji . '>';
echo '<br>';

// septinta uzduotis
echo '<h3>' . 'Septinta uzduotis:' . '</h3>' . '<br>';
/*
Naudokite funkcija rand(). 
Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 
0 - raudonas, 
didesni už 0 mėlyni. 
*/
$coloredNum1 = rand(-10, 10);
$coloredNum2 = rand(-10, 10);
$coloredNum3 = rand(-10, 10);
if ($coloredNum1 < 0) {
    echo '<p style="color:green">' . $coloredNum1 . '</p>';
} elseif ($coloredNum1 === 0) {
    echo '<p style="color:red">' . $coloredNum1 . '</p>';
} elseif ($coloredNum1 > 0) {
    echo '<p style="color:blue">' . $coloredNum1 . '</p>';
}

if ($coloredNum2 < 0) {
    echo '<p style="color:green">' . $coloredNum2 . '</p>';
} elseif ($coloredNum2 === 0) {
    echo '<p style="color:red">' . $coloredNum2 . '</p>';
} elseif ($coloredNum2 > 0) {
    echo '<p style="color:blue">' . $coloredNum2 . '</p>';
}

if ($coloredNum3 < 0) {
    echo '<p style="color:green">' . $coloredNum3 . '</p>';
} elseif ($coloredNum3 === 0) {
    echo '<p style="color:red">' . $coloredNum3 . '</p>';
} elseif ($coloredNum3 > 0) {
    echo '<p style="color:blue">' . $coloredNum3 . '</p>';
}

//astunta uzduotis
echo '<h3>' . 'Astunta uzduotis:' . '</h3>' . '<br>';
/*
Įmonė parduoda žvakes po 1 EUR. 
Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
*/
$zvakiuKiekis = rand(5, 3000);
$zvakesKaina = $zvakiuKiekis;
echo "Zvakiu kekis: $zvakiuKiekis";
echo '<br>';
echo "Zvakiu kaina: $zvakesKaina";

if ($zvakiuKiekis > 1000 && $zvakiuKiekis < 2000) {
    echo '<br>' . 'Taikoma nuolaida 3%:' . '<br>';
    $nuolaida = ($zvakesKaina * 3) / 100;
    echo $zvakesKaina - $nuolaida;
} elseif ($zvakiuKiekis > 2000) {
    echo '<br>' . 'Taikoma nuolaida 4%:' . '<br>';
    $nuolaida = ($zvakesKaina * 4) / 100;
    echo $zvakesKaina - $nuolaida;
}
echo '<br>';

// devinta uzduotis
echo '<h3>' . 'Devinta uzduotis:' . '</h3>' . '<br>';
/*
Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. 
Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/
/*
reikai suskaicioti vidurki.
po to dar karta sukkaicioti vidurki, bet dabar atmetinet (kintamuju) reiksmes 
kurie gali buti mazesni negu 10 ir didesni negu 90.
*/
$number1 = rand(0, 100);
$number2 = rand(0, 100);
$number3 = rand(0, 100);

$aritmetinisVidurkis = ($number1 + $number2 + $number3) / 3;
$roundAritmetinisVidurkis = round($aritmetinisVidurkis, 0);
echo $roundAritmetinisVidurkis;
echo '<br>';

$vidSum = 0;
$aritVidurkisCount = 0;

if ($number1 > 10 && $number1 < 90) {
    $vidSum += $number1;
    $aritVidurkisCount++;
}
if ($number2 > 10 && $number2 < 90) {
    $vidSum += $number2;
    $aritVidurkisCount++;
}
if ($number3 > 10 && $number3 < 90) {
    $vidSum += $number3;
    $aritVidurkisCount++;
}

$aritVidurkis2 = $vidSum / $aritVidurkisCount;
$aritVid2Roudn = round($aritVidurkis2, 0);
echo $aritVid2Roudn;
echo '<br>';

// desimta uzduotis
echo '<h3>' . 'Desimta uzduotis:' . '</h3>' . '<br>';
/*
Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. 
Skaičių pridėkite prie jau sugeneruoto laiko. 
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/
$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$papildomosSekundes = rand(0, 300);

echo $valandos . ':' . $minutes . ':' . $sekundes;

$sekundziuSuma = $sekundes + $papildomosSekundes;
if ($sekundziuSuma >= 60) {
    $sekundziuLieka = $sekundziuSuma - 60;
    $minutes += 1;
    if ($sekundziuLieka >= 60) {
        $sekundziuLieka -= 60;
        $minutes += 1;
    }
    if ($sekundziuLieka >= 60) {
        $sekundziuLieka -= 60;
        $minutes += 1;
    }
    if ($sekundziuLieka >= 60) {
        $sekundziuLieka -= 60;
        $minutes += 1;
    }
    if ($sekundziuLieka >= 60) {
        $sekundziuLieka -= 60;
        $minutes += 1;
    }
    if ($sekundziuLieka >= 60) {
        $sekundziuLieka -= 60;
        $minutes += 1;
    }
    $sekundes = $sekundziuLieka;
    if ($minutes >= 60) {
        $valandos += 1;
        $minutes = 0;
        if ($valandos >= 24) {
            $valandos = 0;
        }
    }
}
echo '<br>';
echo $valandos . ':' . $minutes . ':' . $sekundes;
echo '<br>';
echo $papildomosSekundes;
