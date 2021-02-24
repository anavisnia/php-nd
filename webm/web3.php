<?php
/*
Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.
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
    <title>Nr3</title>
</head>
<body style="background:#<?php echo $color?>;">
    <a href="http://localhost/bit/nd1/webm/web3.php">Home</a>
    <form action="" method="get">
    <input type="text" name="color">
    <button type="submit">IVESK SPALVOS KODA</button>
    </form>
</body>
</html>