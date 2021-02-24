<?php
/*
Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
*/
_pc($_GET);
if(isset($_GET['color'])) {
    $color = $_GET['color'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr2</title>
</head>
<body style="background:#<?php echo $color?>;">
    <a href="http://localhost/bit/nd1/webm/web2.php">Home</a>
    <a href="http://localhost/bit/nd1/webm/web2.php?color=ff1234">Colored</a>
</body>
</html>