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
    <h1 class="loguj_h1">Zaloguj się</h1>
    <form method="post">
        <input type="text" class="loguj_input" name="login" maxlength="12" placeholder="Podaj login:">
        <input type="text" class="loguj_input"  name="haslo1" placeholder="Hasło:">
        <input type="text" class="loguj_input"  name="haslo2" minlength="6" placeholder="Hasło:">

        <input type="submit"  class="loguj_input" value="Przejdź dalej">
        <button class="loguj_button"><a href="Start.php">POWRÓT</a></button>
    </form>

    <?php
    if(isset($_POST['login'])){
        if(empty($_POST['login'])|| empty($_POST['haslo1'])){
            echo '<br>Coś poszło nie tak! Wprowadz haslo albo login';
        }
        else{
            if(isset($_POST['haslo1'])){
                $a = $_POST['haslo1'];
                $b = $_POST['haslo2'];
                if($a===$b){
                    $_SESSION['login_uzytkownika'] = $_POST['login'];
            $_SESSION['zalogowany'] = true;
            header('Location: APLIKACJA.php');
                }else{
                    echo 'Hasła nie mogą się różnić!';
                }
            }
        }
    }
    ?>
</body>
</html>