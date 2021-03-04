<?php
require __DIR__.'/bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Saskaita</title>
</head>
<body>
    <?php include_once(__DIR__.'./components/navbar.php')?>
    <section class="hero">
        <h1>Bankas</h1>
    </section>
    <section class="saskaitu_sarasas">
        <div class="sarasas">
            <h3>Saskaitu sarasas:</h3>
            <ul class="account_list">
                <?php foreach(readData() as $user) : ?>
                    <div class="ul_item">
                        <h4>Saskaitos Nr. <?= $user['accountNum'] ?> </h4>
                        <form action="<?= URL ?>delete.php?id=<?= $user['id'] ?>" method="post">
                            <button type="submit">Istrinti</button>
                            <a href="<?= URL ?>add.php?id=<?= $user['id'] ?>">Prideti</a>
                            <a href="<?= URL ?>withdraw.php?id=<?= $user['id'] ?>">Nuskaiciuoti</a>
                        </form>
                    </div>
                <?php endforeach ?>

                <!-- <div class="ul_item">
                    <h4>Saskaita 1</h4>
                    <button type="submit">Istrinti</button>
                    <a href="http://localhost/bit/nd1/bank/add.php">Prideti</a>
                    <a href="http://localhost/bit/nd1/bank/withdraw.php">Nuskaiciuoti</a>
                </div>
                    
                <div class="ul_item">
                    <h4>Saskaita 2</h4>
                    <button type="submit">Istrinti</button>
                    <a href="http://localhost/bit/nd1/bank/add.php">Prideti</a>
                    <a href="http://localhost/bit/nd1/bank/withdraw.php">Nuskaiciuoti</a>
                </div>

                <div class="ul_item">
                    <h4>Saskaita 3</h4>
                    <button type="submit">istrinti</button>
                    <a href="http://localhost/bit/nd1/bank/add.php">Prideti</a>
                    <a href="http://localhost/bit/nd1/bank/withdraw.php">Nuskaiciuoti</a>
                </div> -->
            </ul>
        </div>
    </section>
    
</body>
</html>