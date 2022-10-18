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
    <label for="cars">Wybierz samochod: <br></label>
    <br>
    <form action="" method="post">
        <select name="cars" id="cars" multiple>
            <option value="Volvo">Volvo</option>
            <option value="Woldswagen">Woldswagen</option>
            <option value="Fiat">Fiat</option>
            <option value="Ford">Ford</option>
            <option value="Skoda">Skoda</option>
            <option value="Volvo12">Volvo12</option>
            <option value="Woldswagen12">Woldswagen12</option>
            <option value="Fiat12">Fiat12</option>
            <option value="Ford12">Ford12</option>
            <option value="Skoda12">Skoda12</option>
        </select>
        <br><br>
        <input type="submit" value="Dodaj do kosza">
    </form>
        <?php
            if(isset($_POST['cars'])){
                $_SESSION['list'] = $_POST['cars'];
                
            }
        ?>
<br>
    <a href="wyloguj.php">Wyloguj się</a>
</body>
</html>
