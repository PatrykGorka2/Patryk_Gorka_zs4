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

        .loguj_body{
            background-color: darkorange;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .loguj_h1{
            font-size: 40px;
            border: 2px solid black;
            width: 80%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: darkorange;
            background-color: black;
        }

        .loguj_h1:hover{
            font-size: 40px;
            border: 5px solid black;
            width: 80%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            background-color: darkorange;
        }

        .loguj_input{
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height:100px;
            font-size: 40px;
        }

        .loguj_input:hover{
            height:120px;
            font-size: 40px;
        }

        .loguj_button{
            margin-top: 20px;
            width: 50%;
            height: 100px;
            background: black;
            color: darkorange;
        }

        .loguj_button a{
            text-decoration: none;
            color: darkorange;
            font-size: 40px;
        }

        .loguj_button:hover{
            margin-top: 20px;
            width: 50%;
            height: 100px;
            background: darkorange;
            color: darkorange;
            border: 5px solid black;
        }

        .loguj_button a:hover{
            text-decoration: none;
            color: black;
            font-size: 40px;

        }


        
    </style>
</head>
<body class="loguj_body">
    <h1 class="loguj_h1">Zaloguj się</h1>
    <form method="post">
        <input type="text" class="loguj_input" name="login" maxlength="12" placeholder="Podaj login:">
        <input type="text" class="loguj_input"  name="haslo1" placeholder="Hasło:">
        <input type="text" class="loguj_input"  name="haslo2" minlength="6" placeholder="Hasło:">

        <input type="submit"  class="loguj_input" value="Przejdź dalej">
        <button class="loguj_button"><a href="index.php">POWRÓT</a></button>
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
            header('Location: zapisz_sie.php');
                }else{
                    echo 'Coś poszło nie tak!';
                }
            }
        }
    }
    ?>
</body>
</html>