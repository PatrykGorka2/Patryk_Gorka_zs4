<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis</title>
    <style>
        body{
            font-family: arial;
            background-color: cornsilk;
        }

        a{
            color: brown;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Witaj w naszym serwisie. Życze miłej pracy</h2>
    <p>Jestes zalogowany jako:</p>
    <span>
        <?php
        if(isset($_SESSION['user']))
        echo $_SESSION['user'];
        ?>
    </span>
    <a href="wyloguj.php">Wyloguj</a>


    
<!--Dodaneeeeeeeeeee-->
    <h2>Wybierz operacje do wykonania</h2>
    <form action="" method="post">
        <input type="submit" value="Pokaz uzytkownikow" name='pokaz'>
    </form>

        <?php
        if(isset($_POST['pokaz'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_users();
        }
        ?>

</body>
</html>

//w swoim kodzie, kod z APLIKACJA.php przerzucic do osobnego skryptu, np funkcje.php
//zrobic dokladnie to samo
// ROBIMY TAK Z BAZA DANYCH WYSWIATLANYCH CWICZEN ORAZ Z DIETA!!!! OSOBNO