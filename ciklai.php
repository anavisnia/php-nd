<?php
echo '<h1>Ciklai</h1>' . '<br>';

// pirma uzduotis
echo '<h3>' . 'Pirma uzduotis:' . '</h3>' . '<br>';
/*
Naršyklėje nupieškite linija iš 400 “*”. 
    a. Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
    b. Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/


// Antra uzduotis
echo '<h3>' . 'Antra uzduotis:' . '</h3>' . '<br>';
/*
Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  
Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/


// Trecia uzduotis
echo '<h3>' . 'Trecia uzduotis:' . '</h3>' . '<br>';
/*
Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. 
Po paskutinio skaičiaus kablelio neturi būti. 
Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
*/


// Ketvirta uzduotis
echo '<h3>' . 'Ketvirta uzduotis:' . '</h3>' . '<br>';
/*
Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
*/


// Penkta uzduotis
echo '<h3>' . 'Penkta uzduotis:' . '</h3>' . '<br>';
/*
Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
*/


// Sesta uzduotis
echo '<h3>' . 'Sesta uzduotis:' . '</h3>' . '<br>';
/*
Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: 
“S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
    a. Iškritus herbui;
    b. Tris kartus iškritus herbui;
    c. Tris kartus iš eilės iškritus herbui;
*/


// Septinta uzduotis
echo '<h3>' . 'Septinta uzduotis:' . '</h3>' . '<br>';
/*
Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. 
Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
Taškų kiekį generuokite funkcija ​rand()​. 
Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.
*/


// Astunta uzduotis
echo '<h3>' . 'Astunta uzduotis:' . '</h3>' . '<br>';
/*
Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. 
Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
*/


// Devinta uzduotis
echo '<h3>' . 'Devinta uzduotis:' . '</h3>' . '<br>';
/*
Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
$c = "10 bezdzioniu \n suvalge 20 bananu.";
Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
$c = '10 bezdzioniu \n suvalge 20 bananu.';
(Stringas viengubose ir dvigubose kabutėse)
*/


// Desimta uzduotis
echo '<h3>' . 'Desimta uzduotis:' . '</h3>' . '<br>';
/*
Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. 
Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. 
Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. 
Suskaičiuokite kiek reikia smūgių.
*/


// Vienolikta uzduotis
echo '<h3>' . 'Vienolikta uzduotis:' . '</h3>' . '<br>';
/*
Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
*/