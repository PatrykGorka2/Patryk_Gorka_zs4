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
            font-family: arial;
            background-color: cornsilk;
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
            color: brown;
        }

        .formik .error{
            color: black;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Witaj, zaloguj sie do serwisu!</h2>
    <div class="formik">
        <form action="logowanie.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="text" name="haslo" placeholder="haslo">
            <input type="submit" value="zaloguj sie" name="loguj">
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
        <p>Nie masz konta? <a href="rejestracja.php">Utwórz konto.</a></p>
    </div>
</body>
</html>