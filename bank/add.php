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
            <p>Kliento Vardas</p>
            <p>Kliento Pavarde</p>
            <p>Kliento Saskaitos Likutis:</p>
            <form action="" method="post">
                <label for="suma">Iveskite skaiciu kiek norite prideti:</label>
                <input type="number" name="suma">
            </form>
        </div>
    </section>
</body>
</html>