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
</head>
<body>
    <h1>Zaloguj się</h1>
    <form method="post">
        <input type="text" name="login">
        <input type="text" name="haslo">
        <input type="submit" value="Zaloguj">
    </form>

    <?php
    if(isset($_POST['login'])){
        if(empty($_POST['login'])|| empty($_POST['haslo'])){
            echo 'Wprowadz dane logowania';
        }
        else{
            $_SESSION['login_uzytkownika'] = $_POST['login'];
            $_SESSION['zalogowany'] = true;
            header('Location: index.php');
        }
    }
    ?>
</body>
</html>
