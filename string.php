<?php
echo '<h1>String</h1>' . '<br>';

// pirma uzduotis
echo '<h3>' . 'Pirma uzduotis:' . '</h3>' . '<br>';
/*
Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą.
*/
$actorName = 'Emma';
$actorLName = 'Roberts';
if (strlen($actorName) > strlen($actorLName)) {
    echo $actorName;
} else {
    echo $actorLName;
}

//antra uzduotis
echo '<br>' . '<h3>' . 'Antra uzduotis:' . '</h3>' . '<br>';
/*
Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/
$actorN = 'Vanessa';
$actorLN = 'Hudgens';
echo strtoupper($actorN) . '<br>';
echo strtolower($actorLN);

//trecia uzduotis
echo '<br>' . '<h3>' . 'Trecia uzduotis:' . '</h3>' . '<br>';
/*
Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti.
*/
$actorN = 'Dakota';
$actorLN = 'Johnson';
$initials = substr($actorN, 0, 1) . substr($actorLN, 0, 1);
echo $initials;
// var_dump($initials);

//ketvirta
echo '<br>' . '<h3>' . 'Ketvirta uzduotis:' . '</h3>' . '<br>';
/*
Sukurti du kintamuosius. 
Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. 
Jį atspausdinti.

*/
$fName = 'Emma';
$lName = 'Roberts';
$concat  = substr($fName, -3) . substr($lName, -3);
echo $concat;

//penkta
echo '<br>' . '<h3>' . 'Penkta uzduotis:' . '</h3>' . '<br>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  
Rezultatą atspausdinti.
*/
$string = "An Amorecan in Paris";
$replaceWith = array('a', 'A');
$replace = '*';
echo (str_replace($replaceWith, $replace, $string));

//sesta
echo '<br>' . '<h3>' . 'Sesta uzduotis:' . '</h3>' . '<br>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
Rezultatą atspausdinti.
*/
$string = "An Amorecan in Paris";
$suskaiciotRaides = substr_count($string, "a");
$suskaiciotRaides += substr_count($string, "A");
echo "Raidziu A/a yra: $suskaiciotRaides";

//septinta
echo '<br>' . '<h3>' . 'Septinta uzduotis:' . '</h3>' . '<br>';
/*
Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. 
Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
“2001: A Space Odyssey” ir 
“It's a Wonderful Life”.
*/
$string = "An Amorecan in Paris";
$vowels = array("a", "e", "i", "o", "u", "y", "w", "A", "E", "I", "O", "U", "Y", "W", " ");
$replacedStr = str_replace($vowels, "", $string);
echo '<br>';
echo $replacedStr;
$string = "Breakfast at Tiffany's";
echo '<br>';
echo $replacedStr = str_replace($vowels, "", $string);
$string = "2001: A Space Odyssey";
echo '<br>';
echo $replacedStr = str_replace($vowels, "", $string);
$string = "It's a Wonderful Life";
echo '<br>';
echo $replacedStr = str_replace($vowels, "", $string);

//astunta
echo '<br>' . '<h3>' . 'Astunta uzduotis:' . '</h3>' . '<br>';
/*
Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.
*/
$starWars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';
echo $starWars . '<br>';
// echo (int)filter_var($starWars, FILTER_SANITIZE_NUMBER_INT);
$numberFromAString = preg_replace('/[^0-9]/', '', $starWars);
echo '<br>' . $numberFromAString;

//devinta
/*
Suskaičiuoti kiek stringe 
“Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
yra žodžių trumpesnių arba lygių nei 5 raidės. 
Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”
 */
echo '<br>' . '<h3>' . 'Devinta uzduotis:' . '</h3>' . '<br>';
$stringToBeSplitted  = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$explode = explode(" ", $stringToBeSplitted);
$countWords = 0;

for ($i = 0; $i < count($explode); $i++) {
    if (strlen($explode[$i]) <= 5) {
        $countWords += 1;
    }
}
echo "Sitam string'e: $stringToBeSplitted <br> yra $countWords zodziu, kurie yra maziau arba lygu 5.";

$stringToBeSplitted2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$explode2 = explode(" ", $stringToBeSplitted2);
$countWords2 = 0;

foreach ($explode2 as $oneWord) {
    if (strlen($oneWord) <= 5) {
        $countWords2 += 1;
    }
}
echo "<br> Sitam string'e: $stringToBeSplitted2 <br> yra $countWords2 zodziai, kurie yra maziau arba lygu 5.";


// desimta
echo '<br>' . '<h3>' . 'Desimta uzduotis:' . '</h3>' . '<br>';
/*
Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. 
Stringo ilgis 3 simboliai.
*/
$abc = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$randomWord = '';
$arrayLength = count($abc) - 1;
$pirmaRaide = rand(0, $arrayLength);
$antraRaide = rand(0, $arrayLength);
$treciaRaide = rand(0, $arrayLength);
echo $abc[$pirmaRaide] . $abc[$antraRaide] . $abc[$treciaRaide];
