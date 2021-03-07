<?php
require __DIR__.'/bootstrap.php';
// $addStatus = $_SESSION['addStatus'];
// if($addStatus) {
//     $result = true;
//     message($result);
// } else {
//     $result = false;
//     message($result);
// }
// $withdrawstatus = $_SESSION['withdrawStatus'];
// if($withdrawstatus) {
//     $result = true;
//     message($result);
// } else {
//     $result = false;
//     message($result);
// }
// $createStatus = $_SESSION['createUser'];
// if($createStatus) {
//     $result = true;
//     message($result);
// } else {
//     $result = false;
//     message($result);
// }
// $deleteStatus = $_SESSION['deleteUser'];
// message($deleteStatus);
// unset($_SESSION['deleteUser']);
// unset($_SESSION['createUser']);
// unset($_SESSION['withdrawStatus']);
// unset($_SESSION['addStatus']);
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
                <!-- <div class="message toast" style="display:<?= $hideDiv?> ?? inline-block">
                <?php 
                    // if ( $withdrawSu == true) {
                    //     echo '<p>'. 'Pinigai sekmingai nuskaiciuoti.' .'</p>';
                    // } elseif ( $withdrawSu == false) {
                    //     echo '<p>'. 'Nuskaicioti pinigu nesigavo. Bandykite dar karta.' .'</p>';
                    // } else {
                    //     $hideDiv = 'none';
                    // }
                ?>
                </div> -->
            </ul>
        </div>
    </section>
    
</body>
</html>