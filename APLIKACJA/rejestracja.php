<?php
session_start();

//walidacja danych formularza
if(isset($_POST['zaloz'])){
    $imie = $_POST['imie'];
    
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    $walidacja = true;

    if(strlen($imie)<3){
        $walidacja = false;
        $_SESSION['imie_error'] = 'Wpisz poprawne imie';
    }

    if(strlen($nazwisko)<3){
        $walidacja = false;
        $_SESSION['nazwisko_error'] = 'Wpisz poprawne imie';
    }

    if(!ctype_alnum($login)){
        $walidacja = false;
        $_SESSION[ 'login_error'] = 'Login musi sie skladac z liter i cyfr (bez polskich znakow)';
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $walidacja = false;
        $_SESSION['email_error'] = 'Wpisz poprawny adres email';
    }

    if($haslo1 != $haslo2){
        $walidacja = false;
        $_SESSION['pass_error'] = 'Podane hasla sa rozne';
    }

    if($walidacja){
        require_once('baza.php');

            mysqli_report(MYSQLI_REPORT_STRICT);
            try{
                $polaczenie = new mysqli($serwer, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e){
                $_SESSION['error'] = $e;
                header('Location: index.php');
                exit();
            }

             //zabezpieczenia
             $login = htmlentities($login);
             $haslo = htmlentities($haslo);
             $login = $polaczenie->real_escape_string($login);
             $haslo = $polaczenie->real_escape_string($haslo);

             //sprawdzamy czy login jest zajety
             $zapytanie = "SELECT login FROM users WHERE login='$login'";
             $wynik = $polaczenie->query($zapytanie);
             if($wynik->num_rows >0){
                $_SESSION['login_error'] =  'Podany login jest zajety. W pisz inny';
             }
             else{

                $haslo1 = password_hash($haslo1, PASSWORD_DEFAULT);
                $zapytanie2 = "INSERT INTO users VALUES(NULL, '$imie', '$nazwisko', '$login', '$haslo1', '$email')";
               if($polaczenie->query($zapytanie2)){
                header('Location: index.php');
               }else{
                   echo 'Nie udalo sie';
               }
             }
             $polaczenie->close();
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial;
            background-image: url("images/cel_treningowy.png");
            color: white;
        }

        form>input{
            display: block;
            margin: 20px;
        }

        div.error{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2px;
            height: 30px;
            color: red;
            font-size: 20px;
            border: 2px solid red;
            background-color:  rgb(37, 37, 4);;
        }

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
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
        text-transform: uppercase;
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
        color: black;
        }

        h2{
            text-align: center;
            text-transform: uppercase;
            font-size: 3rem;
        }

    </style>
</head>
<body>
    <h2>Wpisz dane do rejestracji.</h2>
    <form action="rejestracja.php" method="post">
        <input type="text" name="imie"  class="logujj_input" placeholder="Imie">
        <div>
            <?php
            if(isset($_SESSION['imie_error'])){
                echo '<div class="error">' . $_SESSION['imie_error']. '</div>';
            unset($_SESSION['imie_error']);
    }
            ?>
        </div>
        <input type="text" name="nazwisko"  class="logujj_input" placeholder="Nazwisko">
        <div>
            <?php
            if(isset($_SESSION['nazwisko_error'])){
                echo '<div class="error">' . $_SESSION['nazwisko_error']. '</div>';
            unset($_SESSION['nazwisko_error']);
    }
            ?>
        </div>

        <input type="login" name="login"  class="logujj_input" placeholder="Login">
        <div>
            <?php
            if(isset($_SESSION['login_error'])){
                echo '<div class="error">' . $_SESSION['login_error']. '</div>';
            unset($_SESSION['login_error']);
    }
            ?>
        </div>

        <input type="text" name="haslo1"  class="logujj_input" placeholder="Haslo">
        <div>
        <?php
            if(isset($_SESSION['pass_error'])){
                echo '<div class="error">' . $_SESSION['pass_error']. '</div>';
            unset($_SESSION['pass_error']);
    }
            ?>
        </div>
        <input type="text" name="haslo2"  class="logujj_input" placeholder="Powtórz hasło">
        <div>
        <?php
            if(isset($_SESSION['pass_error'])){
                echo '<div class="error">' . $_SESSION['pass_error']. '</div>';
            unset($_SESSION['pass_error']);
    }
            ?>
        </div>

        <input type="email" name="email"  class="logujj_input" placeholder="E-mail">
        <div>
        <?php
            if(isset($_SESSION['email_error'])){
                echo '<div class="error">' . $_SESSION['email_error']. '</div>';
            unset($_SESSION['email_error']);
    }
            ?>
        </div>
        <input type="submit" value="Załóż konto"  class="loguj_input" name="zaloz">
        <button class="loguj_input"><a href="Start.php">Powrot</a></button> 
    </form>
</body>
</html>