<?php 
/*
Sukurkite du puslapius pink.php ir rose.php. 
Nuspalvinkite juos atitinkamo spalvom. 
Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. 
Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. 
Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.
*/
// if($_SERVER['REQUEST_METHOD'] == 'GET') {
    // header('Location: http://localhost/bit/nd1/webm/web8/pink.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose</title>
</head>
<body style="background:#FF00CC;">
    <form style="display:none;" action="" method="get">
    <input type="text" name="color">
    </form>
</body>
</html>