<?php
require 'Pinigine/Pinigine.php';
$pinigine1 = new Pinigine;
$pinigine1->ideti(5);
$pinigine1->ideti(1);

$pinigine2 = new Pinigine;
$pinigine2->ideti(20);
$pinigine2->ideti(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinigine</title>
</head>
<body>
    <section>
        <div>
            <span>
                <?php
                    echo $pinigine1->skaiciuoti();
                    echo '<br>';
                    echo $pinigine2->skaiciuoti();
                ?>
            </span>
        </div>
    </section>
</body>
</html>