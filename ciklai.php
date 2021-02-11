<?php
echo '<br>' . '<h3>' . 'Ciklai' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
//a. css way



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
$numbers = [];
for ($i = 0; $i <= 300; $i++) {
    $randomNum = rand(0, 300);
    array_push($numbers, $randomNum);
}
// echo '<pre>';
// print_r($numbers);
