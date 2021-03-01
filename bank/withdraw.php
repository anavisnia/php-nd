<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Nuskaiciuoti Lesas</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="create.php">Sukurti nauja saskaita</a>
        <a href="add.php">Prideti lesas</a>
        <a href="withdraw.php">Nuskaiciuoti lesas</a>
    </div>
    <section>
        <div class="person_info_header">
            <h3>Nuskaicioti Lesas</h3>
        </div>
        <div class="person_info_body">
            <p>Kliento Vardas</p>
            <p>Kliento Pavarde</p>
            <p>Kliento Saskaitos Likutis:</p>
            <form action="" method="post">
                <label for="suma">Iveskite skaiciu kiek norite nuskaiciuoti:</label>
                <input type="number" name="suma">
            </form>
        </div>
    </section>
    
</body>
</html>