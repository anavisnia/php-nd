<?php 
/*
Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).
*/
if(!empty($_GET['color']) && $_GET['color'] == 'red') {
    header('Location:http://localhost/bit/nd1/webm/web5/red.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:blue;">
<a style="color:red;"href="http://localhost/bit/nd1/webm/web5/blue.php?color=red">Go</a>
</body>
</html>