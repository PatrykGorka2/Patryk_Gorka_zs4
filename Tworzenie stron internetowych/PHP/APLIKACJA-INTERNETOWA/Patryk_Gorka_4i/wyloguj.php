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

        .wyloguj_h3{
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

        .wyloguj_h3:hover{
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

        .wyloguj_button{
            margin-top: 20px;
            width: 50%;
            height: 80px;
            background: white;
            color: darkorange;
        }

        .wyloguj_button a{
            text-decoration: none;
            color: black;
            font-size: 40px;
            width: 100%;
            height: 100%
        }

        .wyloguj_button:hover{
            margin-top: 20px;
            width: 50%;
            height: 80px;
            color: darkorange;
            border: 5px solid black;
        }

        .wyloguj_button a:hover{
            text-decoration: none;
            color: darkorange;
            font-size: 40px;
            width: 100%;
            height: 100%
        }

        

        
    </style>
</head>
<body class="loguj_body">
     <button class="wyloguj_button"><a href="index.php">POWRÓT</a></button>
</body>
</html>