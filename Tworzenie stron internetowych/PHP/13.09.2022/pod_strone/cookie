<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $mies = 2592000 + time();
        setcookie("wizyta", date("F jS - g: ia"), $mies);
    ?>

    <?php
        if(isset($_COOKIE['wizyta'])){
            $ostatnia = $_COOKIE['wizyta'];
            echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas: ".$ostatnia;
        }
        else{
            echo "Witamy na naszej stronie!";
        }
    ?>
</body>
</html>
