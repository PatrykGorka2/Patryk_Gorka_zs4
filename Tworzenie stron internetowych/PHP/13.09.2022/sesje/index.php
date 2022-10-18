<?php
session_start();

//zabezpieczenie aby niezalogowany uzytkownik nie miał dostępu do serwisu
if(!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] == false){
    header('Location: loguj.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Witaj w naszym serwisie</h1>
    <h3>Jestes zalogowany jako: <?php echo $_SESSION['login_uzytkownika']; ?></h3>
    <a href="wyloguj.php">Wyloguj się</a>
</body>
</html>
