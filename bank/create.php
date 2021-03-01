<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    _pc($_POST);
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $accountNum = $_POST['accountNum'];
    $personId = $_POST['personId'];
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
    <link rel="stylesheet" href="./css/create.css">
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
        <div class="personal_info_body">
            <form action="" method="post">
                <div class="ul_item">
                    <label style="color: cornflowerblue;" for="fName">Vardas</label>
                    <input type="text" name="fName">
                </div>
                <br>
                <div class="ul_item">
                    <label style="color: cornflowerblue;" for="lName">Pavarde</label>
                    <input type="text" name="lName">
                </div>
                <br>
                <div class="ul_item">
                    <label style="color: cornflowerblue;" for="accountNum">Saskaitos Numeris</label>
                    <input type="text" name="accountNum">
                </div>
                <br>
                <div class="ul_item">
                    <label style="color: cornflowerblue;" for="personId">Asmens Kodas</label>
                    <input type="number" name="personId">
                </div>
                <br>
                <button type="submit">Sukurti Saskaita</button>
            </form>
        </div>
    </section>
</body>
</html>