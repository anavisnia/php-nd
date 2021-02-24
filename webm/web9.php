<?php 
/*
Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 
Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).
*/
$count = 0;
if(isset($_POST['submitBtn'])) {
    $color = 'white';
    if (isset($_POST['checkbox'])) {
        _pc($_POST['checkbox']);
        $count++;
    }
    echo "<h3 style='color:red;'>Pazymeta: $count</h3>";
} else {
    $color = 'black';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:<?php echo $color ?>;">
    <?php 
    $randNum = rand(3,10);
    function createInput($num){
        for($i = 0; $i < $num; $i++) {
            $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
            echo '<br>' . "<input type='checkbox' name='checkbox' id='$letters[$i]'>" .
            '<label style="color:white;" for="checkbox">' . $letters[$i] . "</label>";
        }
    }
    ?>
    <form action="" method="post">
        <?php echo createInput($randNum); ?> 
        <br>
        <button type="submit" name='submitBtn'>SPAUSK</button>
    </form>
</body>
</html>