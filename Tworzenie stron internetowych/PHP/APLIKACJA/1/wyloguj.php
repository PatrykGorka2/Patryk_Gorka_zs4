<?php
session_start();
unset($_SESSION['login_uzytkownika']);
session_destroy();

echo '<h3 class="wyloguj_h3">Wylogowanno cie z systemu</h3>';
echo '<button class="wyloguj_button"><a href="loguj.php">Zaloguj sie ponownie</a></button>';
?>


<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body class="loguj_body">
     <button class="wyloguj_button"><a href="Start.php">POWRÓT</a></button>
</body>
</html>