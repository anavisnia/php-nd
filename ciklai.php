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
echo '<p>' . 'Dar ne iki galo' . '</p>';

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
