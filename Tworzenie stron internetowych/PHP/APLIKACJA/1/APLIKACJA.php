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
    <link rel="stylesheet" href="stylee.css">
    <title>START</title>
</head>
<body>
   
</body>
<div class="przycisk">
<h2 class="h3_gora">Zalogowano jako: <?php echo $_SESSION['login_uzytkownika']; ?></h2>
<button class="button_gora"><a href="wyloguj.php">WYLOGUJ</a></button>
<button class="button_gora1"><a href="APLIKACJA.php">GORA</a></button>
</div>
</html>