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
    <title>Saskaitos Sukurimas</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="create.php">Sukurti nauja saskaita</a>
        <a href="add.php">Prideti lesas</a>
        <a href="withdraw.php">Nuskaiciuoti lesas</a>
    </div>
    <section class="create_main">
        <div class="person_info_header">
            <h3>Sukurti Saskaita</h3>
        </div>
        <form action="" method="post">
            <label for="fName">Vardas</label>
            <input type="text" name="fName">
            <br>
            <label for="lName">Pavarde</label>
            <input type="text" name="lName">
            <br>
            <label for="accountNum">Saskaitos Numeris</label>
            <input type="text" name="accountNum">
            <br>
            <label for="personId">Asmens Kodas</label>
            <input type="number" name="personId">
            <br>
            <button type="submit">Sukurti Saskaita</button>
        </form>
    </section>
</body>
</html>