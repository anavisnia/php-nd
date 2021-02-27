<?php 
session_start();
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $postIlgis = count($_POST);
    $_SESSION['rezultatas'] = $postIlgis  - 1; 
    _pc($postIlgis);
} else {
    echo 'Klaida...';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultatas</title>
</head>
<body>
    <?php
        if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            echo '<p>Buvo pazymeta:' . ' ' . ($_SESSION['rezultatas']). ' ' . 'checkbox' . ' is ' .  $_SESSION['randNum'] . '.' .'</p>';
        }
    ?>
    <a style="padding:8px 15px;background-color:#600080;color:white;text-decoration:none;border-radius:5px;" href="http://localhost/bit/nd1/webm/web9/web9v2.php">Go back</a>
</body>
</html>
