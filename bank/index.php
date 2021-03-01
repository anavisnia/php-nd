<?php

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
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="create.php">Sukurti nauja saskaita</a>
        <a href="add.php">Prideti lesas</a>
        <a href="withdraw.php">Nuskaiciuoti lesas</a>
    </div>
    <section class="hero">
        <h1>Bankas</h1>
    </section>
    <section class="saskaitu_sarasas">
        <div class="sarasas">
            <h3>Saskaitu sarasas:</h3>
            <ul class="account_list">
                <div class="ul_item">
                    <h4>Saskaita 1</h4>
                    <button type="submit">Istrinti</button>
                    <a href="#">Prideti</a>
                    <a href="#">Nuskaiciuoti</a>
                </div>
                    
                <div class="ul_item">
                    <h4>Saskaita 2</h4>
                    <button type="submit">Istrinti</button>
                    <a href="#">Prideti</a>
                    <a href="#">Nuskaiciuoti</a>
                </div>

                <div class="ul_item">
                    <h4>Saskaita 3</h4>
                    <button type="submit">istrinti</button>
                    <a href="#">Prideti</a>
                    <a href="#">Nuskaiciuoti</a>
                </div>
            </ul>
        </div>
    </section>
    
</body>
</html>