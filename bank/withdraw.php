<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/withdraw.css">
    <title>Nuskaiciuoti Lesas</title>
</head>
<body>
    <?php include_once(__DIR__.'./components/navbar.php')?>
    <section class="withdraw_main">
        <div class="person_info_header">
            <h3>Nuskaicioti Lesas</h3>
        </div>
        <div class="person_info_body">
        <p>Kliento Vardas: <?= $user['fName'] ?></p>
            <p>Kliento Pavarde: <?= $user['lName'] ?></p>
            <p>Kliento Saskaitos Nr.: <?= $user['accountNum'] ?></p>
            <p>Kliento Saskaitos Likutis: <?= $user['currentAmount'] ?></p>
            <form action="" method="post">
                <label for="suma">Iveskite skaiciu kiek norite nuskaiciuoti:</label>
                <input type="number" name="suma">
            </form>
        </div>
    </section>
    
</body>
</html>