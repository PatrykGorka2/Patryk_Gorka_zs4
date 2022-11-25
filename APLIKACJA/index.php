<?php
session_start();
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
            background-image: url("images/cel_treningowy.png");
            width: 100%;
            color: white;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .formik{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .formik input{
            display: block;
            margin: 20px;
        }

        .formik p,
        .formik .error{
            flex-basis: 30%;
            text-align: center;
        }
        .formik a{
            text-decoration: none;
            color: red;
        }

        .formik .error{
            color: black;
            border: 1px solid black;
            padding: 10px;
        }

        .loguj_input{
        height: 90px;
        border: 3px solid white;
        border-radius: 25px;
        background-color: transparent;
        cursor: pointer;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-top: 10px;
        transition: 0.5s;
        width: 350px;
        color: white;
        }

        .loguj_input a{
            text-decoration: none;
            color: white;
        }

        .loguj_input:hover{
        background-color: black;
        color: white;
        }

        .logujj_input{
        height: 50px;
        border: 3px solid white;
        border-radius: 25px;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-bottom: 5px;
        transition: 0.5s;
        width: 350px;
        }

        .logujj_input:hover{
            background-color: white;
        color: white;
        }

        h2{
            font-family: 'Saira Condensed', sans-serif;
            font-size: 60px;
            text-transform: uppercase;
            color: white;
            margin-top: 60px;
            text-align: center;
        }


        p{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Saira Condensed', sans-serif;
            font-size: 50px;
            color: white;
            text-transform: uppercase;
            margin-left: 30px;
            margin-right: 30px;
            width: 100%;
            height: 100%;
        }

        p a{
            font-size: 30px;
            margin-top: 50px;
            border: 3px solid white;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            border-radius: 25px;
            height: 100px;
            background-color: transparent;
            color: white;
        }

        a{
            color: white;
        }

        p a:hover{
            transition: 0.5s;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 100px;
            background-color: black;
            color: white;
        }

      
    </style>
</head>
<body>
    <h2>Witaj, zaloguj sie do serwisu!</h2>
    <div class="formik">
        <form action="logowanie.php" method="post">
            <input type="text" name="login" class="logujj_input" placeholder="Login">
            <input type="text" name="haslo" class="logujj_input" placeholder="haslo">
            <input type="submit" value="zaloguj sie" class="loguj_input" name="loguj">
        </form>
        <?php
        if(isset($_SESSION['error'])): ?>
        <div class="error">
        <?php echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
        </div>
        <?php endif; ?>
        <!--<div class="error"></div>-->
<p>Nie masz konta? <a href="rejestracja.php">Utwórz teraz</a></p>   
<button class="loguj_input"><a href="Start.php">Powrot</a></button>     
    </div>
</body>
</html>