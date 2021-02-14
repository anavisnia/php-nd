<?php
echo '<h3>' . 'Ciklai' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
echo '<p>' . 'Dar ne iki galo' . '</p>' . '<br>';
echo '<p>a. css way:</p>';
//a. css way



echo '<p>b. programmers way:</p>';
//b. programmers way
$i = 1;
$countSimbol = 0;
$string = '*';
while ($i <= 400) {
    echo $string;
    if ($i === 50 || $i === 100 || $i === 150 || $i === 200 || $i === 250 || $i === 300 || $i === 350) {
        echo '<br>';
    }
    $i++;
}


//antra
echo '<br>' . '<h3>' . 'Antra Uzduotis' . '</h3>' . '<br>';
// $numbers = [];
$countNum = 0;
for ($i = 0; $i <= 300; $i++) {
    $randomNum = rand(0, 300);
    // array_push($numbers, $randomNum);
    if ($randomNum > 150) {
        $countNum++;
    }

    if ($randomNum > 275) {
        echo "<span style=\"color:red\">$randomNum</span> ";
    } else {
        echo $randomNum . ' ';
    }
}
echo '<br>' . 'Cia yra ' . $countNum . ' skaiciu/us, kurie yra didesni uz 150.';

//trecia
echo '<br>' . '<h3>' . 'Trecia Uzduotis' . '</h3>' . '<br>';
$random = rand(3000, 4000);
$aibe = [];
for ($i = 1; $i <= $random; $i++) {
    if ($i % 77 === 0) {
        // echo $i . ', ';
        array_push($aibe, $i);
    }
}
$stringAibe = implode(", ", $aibe);
echo $stringAibe;

//Ketvirta
echo '<br>' . '<h3>' . 'Ketvirta Uzduotis' . '</h3>' . '<br>';

$string = '*';
// echo '<div style="display:block;width:100%">';
for ($i = 1; $i <= 25; $i++) {
    for ($j = 1; $j <= 25; $j++) {
        echo "<span style=\"font-size:10px;padding:4px;\">$string</span>";
    }
    echo '<br>';
}
// echo '</div>';

//penkta
echo '<br>' . '<h3>' . 'Penkta Uzduotis' . '</h3>' . '<br>';
echo '<p>' . 'Dar ne iki galo' . '</p>';
$string = '*';
for ($i = 1; $i <= 25; $i++) {
    for ($j = 1; $j <= 25; $j++) {
        echo "<span style=\"font-size:10px;padding:4px;\">$string</span>";
    }
    echo '<br>';
}

//Sesta
echo '<br>' . '<h3>' . 'Sesta Uzduotis' . '</h3>' . '<br>';
$flipCoinResults = '';
// 0 - herbas
// 1 - skaicius
echo "Scenarijus a: <br>";
do {
    $flipCoin = rand(0, 1);
    if ($flipCoin === 1) {
        echo 'S' . '<br>';
    } else {
        echo 'H' . '<br>';
    }
} while ($flipCoin !== 0);

echo "<br> Scenarijus b: <br>";
$herbCount = 0;

do {
    $flipCoin = rand(0, 1);
    if ($flipCoin === 1) {
        echo 'S' . '<br>';
    } else {
        echo 'H' . '<br>';
        $herbCount++;
    }
} while ($herbCount !== 3);

echo "<br> Scenarijus c: <br>";
do {
    $flipCoin = rand(0, 1);
    if ($flipCoin === 1) {
        echo 'S' . '<br>';
        $flipCoinResults .= 'S';
    } else {
        echo 'H' . '<br>';
        $flipCoinResults .= 'H';
    }
} while (!str_contains($flipCoinResults, 'HHH'));

echo "<br> Scenarijus d: <br>";
$flipCoinResults = '';
do {
    $flipCoin = rand(0, 1);
    if ($flipCoin === 1) {
        echo 'S' . '<br>';
        $flipCoinResults .= 'S';
    } else {
        echo 'H' . '<br>';
        $flipCoinResults .= 'H';
    }
} while (!str_contains($flipCoinResults, 'SSS'));

//Septinta
echo '<br>' . '<h3>' . 'Septinta Uzduotis' . '</h3>' . '<br>';
$player1Name = 'Petras';
$players1ScoreSum = 0;
$player2Name = 'Kazis';
$players2ScoreSum = 0;

do {
    $players1Score = rand(10, 20);
    $players2Score = rand(5, 25);
    $players1ScoreSum += $players1Score;
    $players2ScoreSum += $players2Score;
} while ($players1ScoreSum <= 222 || $players2ScoreSum <= 222);
if ($players1ScoreSum >= 222 && $players1ScoreSum > $players2ScoreSum) {
    echo "$player1Name surinko: $players1ScoreSum. $player2Name surinko: $players2ScoreSum. Partija laimejo: $player1Name!";
} elseif ($players2ScoreSum >= 222 && $players1ScoreSum < $players2ScoreSum) {
    echo "$player1Name surinko: $players1ScoreSum. $player2Name surinko: $players2ScoreSum. Partija laimejo: $player2Name!";
} elseif ($players1ScoreSum === $players2ScoreSum) {
    echo "$player1Name surinko: $players1ScoreSum. $player2Name surinko: $players2ScoreSum. Partija laimejo: Abu!";
}

//Astunta
echo '<br>' . '<h3>' . 'Astunta Uzduotis' . '</h3>' . '<br>';
// $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
// echo $colorRGB;
echo '<p>' . 'Rombas 21 x 21:' . '</p>' . '<br>';

echo "<pre>";
for ($i = 1; $i < 11; $i++) {
    for ($j = $i; $j < 11; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
        echo "&nbsp;<span style=\"padding:0px;color:rgb($colorRGB);\">*</span>";
    }
    echo "<br>";
}

for ($i = 11; $i > 0; $i--) {
    for ($j = 11 - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
        echo "&nbsp;<span style=\"padding:0px;color:rgb($colorRGB);\">*</span>";
    }
    echo "<br>";
}
// echo "</pre>";

echo '<p>' . 'Kvadratas 21 x 21:' . '</p>';

for ($i = 1; $i <= 21; $i++) {
    $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
    echo '<br>' . "<span style=\"padding:1px;color:rgb($colorRGB);\">*</span> ";
    for ($j = 1; $j <= 20; $j++) {
        $colorRGB = rand(0, 252) . ', ' . rand(0, 252) . ', ' . rand(0, 252);
        echo "<span style=\"padding:1px;color:rgb($colorRGB);\">*</span> ";
    }
}
echo '</pre>';
// echo '<br>' . '*' . "&nbsp;*" . '*' . '<br>';
// echo "&nbsp;" . '<br>';


//Devinta
echo '<br>' . '<h3>' . 'Devinta Uzduotis' . '</h3>' . '<br>';
$c = "10 bezdzioniu \n suvalge 20 bananu.";
$StartTime = microtime(true);
for ($i = 0; $i <= 1; $i++) {
    echo $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$EndTime = microtime(true);
$resultTime = $EndTime - $StartTime;
$resultRound = round($resultTime, 2);
echo '<br>';
echo "Ispauzdinti '10 bezdzioniu suvalge 20 bananu', uztruko: $resultTime sec.;";

// antras
// $c = "10 bezdzioniu \n suvalge 20 bananu.";
// $StartTime2 = microtime(true);
// for ($i = 0; $i <= 1000000; $i++) {
//     echo $c = "10 bezdzioniu \n suvalge 20 bananu.";
// }
// $EndTime2 = microtime(true);
// $resultTime2 = $EndTime2 - $StartTime2;
// $resultRound2 = round($resultTime2, 2);
// echo '<br>';
// echo "Ispauzdinti '10 bezdzioniu suvalge 20 bananu', uztruko: $resultTime sec.";

//Desimta
echo '<br>' . '<h3>' . 'Desimta Uzduotis' . '</h3>' . '<br>';
/*
Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
a)
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
*/
$vinisIlgis = 85; // 8.5 cm
$smugis = rand(5, 20); //mm
// 1cm = 10 mm
$smugiuSkaiciokle = 0;
for ($i = 1; $i <= 5; $i++) {
    $smugioGilis = 0;
    while ($smugioGilis <= 85) {
        $rand = rand(5, 20);
        $smugioGilis += $rand;
        $smugiuSkaiciokle++;
    }
    // while ($smugioGilis <= 85) {
    //     $rand = rand(5, 20);
    //     if ($smugioGilis + $rand <= 85) {
    //         $smugioGilis += $rand;
    //         $smugiuSkaiciokle++;
    //     } else {
    //         break;
    //     }
    // echo $smugioGilis . '<br>';
    // }
    // echo '<br>';
}
echo "Dalis a: Mums reikia $smugiuSkaiciokle smugiu/smugis.";

/*
b)
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/

$smugis = rand(20, 30);
$smugiuSkaiciokle = 0;
$kiekNepataikeKartu = 0;
for ($i = 1; $i <= 5; $i++) {
    $smugioGilis = 0;
    while ($smugioGilis <= 85) {
        $nepataikis = rand(0, 1);
        if ($nepataikis === 0) {
            $kiekNepataikeKartu++;
        } else {
            $rand = rand(5, 20);
            $smugioGilis += $rand;
            $smugiuSkaiciokle++;
        }
    }
}
echo "<br>Dalis b: Mums reikia:" . ($smugiuSkaiciokle + $kiekNepataikeKartu) . "smugiu/smugis. Nepataike: $kiekNepataikeKartu.";
