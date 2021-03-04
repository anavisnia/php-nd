<?php
require __DIR__.'/bootstrap.php';
//POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $fName = (string) $_POST['fName'] ?? 'Bot';
    // $lName = (string) $_POST['lName'] ?? 'Botbot';
    // $accountNum = (string) $_POST['accountNum'] ?? 'LT000000000000000000';
    // $personId = (int) $_POST['personId'] ?? '00000000000';

    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    $currentAmount = $_POST['currentAmount'] ?? 0;
    if(!is_int($currentAmount)) {
        $currentAmount = 0;
    }
    add($id, $currentAmount);
    header('Location: '.URL);
    die;
}
//GET
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    $user = getUser($id);
    if(!$user) {
        header('Location: '.URL);
        die; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/add.css">
    <title>Prideti Lesas</title>
</head>
<body>
    <?php include_once(__DIR__.'./components/navbar.php')?>
    <section class='main_add'>
        <div class="person_info_header">
            <h3>Prideti Lesas</h3>
        </div>
        <div class="person_info_body">
            <p>Kliento Vardas: <?= $user['fName'] ?></p>
            <p>Kliento Pavarde: <?= $user['lName'] ?></p>
            <p>Kliento Saskaitos Nr.: <?= $user['accountNum'] ?></p>
            <p>Kliento Saskaitos Likutis: <?= $user['currentAmount'] ?></p>

            <form action="<?= URL ?>add.php?id=<?= $user['id'] ?>" method="post">
                <label for="currentAmount">Iveskite skaiciu kiek norite prideti:</label>
                <input type="text" name="currentAmount" value="<?= $user['currentAmount'] ?>">
                <button type="submit">Prideti</button>
            </form>
        </div>
    </section>
</body>
</html>