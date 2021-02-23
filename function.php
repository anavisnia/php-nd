<?php
echo '<h3>' . 'Funkcijos' . '</h3>' . '<br>';

//pirma
echo '<br>' . '<h3>' . 'Pirma Uzduotis' . '</h3>' . '<br>';
/*
Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
*/
function printText($text)
{
    return "<h1>$text</h1>";
}

echo printText('Hello');

//Antras
echo '<br>' . '<h3>' . 'Antra Uzduotis' . '</h3>' . '<br>';
/*
Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
*/
function printText2($text, $hNum) 
{
    return "<h$hNum>$text</h$hNum>";
}
echo printText2('Dream', 2);

echo '<br>' . '<h3>' . 'Trecia Uzduotis' . '</h3>' . '<br>';
/*
Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
Visus skaitmenis stringe įdėkite į h1 tagą. 
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();
*/
$string = md5(time());
echo $string;
$pattern = '/[0-9]+/';
function findNum($text)
{
    _pr("<h1>$text</h1>");
}
$result = preg_replace_callback($pattern, function($matches){return findNum($matches[0]);}, $string);
// _pr($result); //raides

//Ketvirtas
echo '<br>' . '<h3>' . 'Ketvirta Uzduotis' . '</h3>' . '<br>';
/*
Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) 
Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
*/
function function4($num)
{
    $countDiv = 0;
    if (!is_int($num)) {
        return 'Paduotas ne int tipo skaicius!';
    } else {
        for($i = 2; $i < $num; $i++) {
            if($num % $i === 0) {
                $countDiv++;
                // echo $i . '<br>'; // paziureti deviderius
            }
        }
        return $countDiv;
    }
}
_pr(function4(15));

//Penkta
echo '<br>' . '<h3>' . 'Penkta Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
*/
$masyvas5 = [];
for($i = 0; $i < 100; $i++) {
    $masyvas5[$i] = rand(33, 77);
}
// _pr($masyvas5);

usort($masyvas5, function($a, $b){
    return function4($b) <=> function4($a);
});

_pr($masyvas5);

//Sesta
echo '<br>' . '<h3>' . 'Sesta Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. 
Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
*/
$masyvas6 = [];
for($i = 0; $i < 100; $i++) {
    $masyvas6[$i] = rand(333, 777);
}
_pr($masyvas6);
$masyvo6Ilgis = count($masyvas6);
for($i = 0; $i < $masyvo6Ilgis; $i++) {
    if(function4($masyvas6[$i]) === 0) {
        unset($masyvas6[$i]);
    }
}
_pr($masyvas6);

//Septinta
echo '<br>' . '<h3>' . 'Septinta Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. 
Paskutinio masyvo paskutinis elementas yra lygus 0;
*/
$ilgis = rand(10, 30);
function generateArr($kiekSuktis)
{
    $num = rand(10, 20);
    for($i = 0; $i < $num; $i++) {
        if($i < $num-1) {
            $array[$i] = rand(0, 10);
        } else {
            if($kiekSuktis > 0) {
                $array[$i] = generateArr($kiekSuktis - 1);
            } else {
                $array[] = 0;
            }
        }
    }
    return $array;
}
echo '<pre>';
$myArray = generateArr($ilgis);
print_r($myArray);
echo '</pre>';

//Astuntas
echo '<br>' . '<h3>' . 'Astunta Uzduotis' . '</h3>' . '<br>';
/*
Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.
*/
function masyvuSuma($masyvas) {
    $suma = 0;
    foreach($masyvas as $skaiciai) {
        if(is_numeric($skaiciai)) {
            $suma += $skaiciai;
        } elseif(is_array($skaiciai)) {
            $suma += masyvuSuma($skaiciai);
        }
    }
    echo $suma . '<br>';
}
masyvuSuma($myArray);

//Devintas
echo '<br>' . '<h3>' . 'Devinta Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. 
Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.
*/
function isPrime($num) {
    if(0 === $num || 1 === $num) {
        return false;
    }
    for($i = 2; $i < $num; $i++) {
        if($num % $i === 0) {
            return false;
        }
    }
    return true;
}

for($i = 0; $i < 3; $i++) {
    $array9[$i] = rand(1, 33);
}
while (!isPrime($array9[count($array9)-1]) || !isPrime($array9[count($array9)-2]) || !isPrime($array9[count($array9)-3])) {
    $array9[] = rand(1, 33);
}
_pr($array9);

//Desimta
echo '<br>' . '<h3>' . 'Desimta Uzduotis' . '</h3>' . '<br>';
/*
Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 
Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 
Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.
*/