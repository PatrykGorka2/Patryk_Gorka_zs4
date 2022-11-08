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
</body>
</html>