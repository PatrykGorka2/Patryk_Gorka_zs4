<?php
session_start();

//walidacja danych formularza
if(isset($_POST['zaloza'])){
    $imie = $_POST['imie'];
    
    $nazwisko = $_POST['nazwisko'];
    $temat = $_POST['temat'];
    $opis = $_POST['opis'];

    $walidacja = true;

    if(strlen($imie)<3){
        $walidacja = false;
        $_SESSION['imie_error'] = 'Wpisz poprawne imie';
    }

    if(strlen($nazwisko)<3){
        $walidacja = false;
        $_SESSION['nazwisko_error'] = 'Wpisz poprawne nazwisko';
    }

    if(strlen($opis) < 15){
        $walidacja = false;
        $_SESSION[ 'opis_error'] = 'Rozwiń bardziej problem';
    }

    if(strlen($temat) < 3){
        $walidacja = false;
        $_SESSION['temat_error'] = 'Wpisz poprawny Temat';
    }

    if($walidacja){
        require_once('baza.php');

            mysqli_report(MYSQLI_REPORT_STRICT);
            try{
                $polaczenie = new mysqli($serwer, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e){
                $_SESSION['error'] = $e;
                header('Location: kontakt.php');
                exit();
            }

             //zabezpieczenia
             $imie = htmlentities($imie);
             $nazwisko = htmlentities($nazwisko);
             $imie = $polaczenie->real_escape_string($imie);
             $nazwisko = $polaczenie->real_escape_string($nazwisko);

             //sprawdzamy czy login jest zajety
             $zapytanie = "SELECT imie FROM zapytania WHERE imie='$imie' AND nazwisko='$nazwisko'";
             $wynik = $polaczenie->query($zapytanie);
             if($wynik->num_rows >0){
                $_SESSION['imie_error'] =  'Zgłoszenie już zostało przyjęte od tej osoby';
             }
             else{
                $zapytanie2 = "INSERT INTO zapytania VALUES(NULL, '$imie', '$nazwisko', '$temat', '$opis')";
               if($polaczenie->query($zapytanie2)){
                header('Location: kontakt.php');
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Kontakt</title>
    <link rel="stylesheet" href="stylek.css">
    <style>
        
.header-Start{
    font-family: 'Saira Condensed', sans-serif;
    margin-top: 30px;
    padding-bottom: 30px;
    height: 700px;
    position: relative;
    background-image: url(images/zadzwon.png);
    text-transform: uppercase;
    color: #fff;
}

.header-Start-lewo h3{
    text-transform: none;
    margin-top: 50px;
    font-size: 30px;
}

body{
    font-family: 'Saira Condensed', sans-serif;
            background-color: cornsilk;
            color: black;
        }

        form>input{
            display: block;
            margin: 20px;
        }

        div.error{
            color: red;
            font-size: 15px;
        }

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .loguj_input{
        height: 90px;
        border: 3px solid black;
        border-radius: 25px;
        background-color: transparent;
        cursor: pointer;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-top: 10px;
        transition: 0.5s;
        width: 350px;
        color: black;
        text-transform: uppercase;
        }

        .loguj_input a{
            text-decoration: none;
            color: black;
        }

        .loguj_input:hover{
        background-color: white;
        color: black;
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

        h2{
            text-align: center;
            text-transform: uppercase;
            font-size: 3rem;
        }

 
        .menu{
            margin-top: -60px;
    background-color: black;
    width: 100%;
}

.main-menu{
    display: flex;
    justify-content: center;
    list-style: none;
}

.main-menu > li > a{
    text-decoration: none;
    display: block;
    text-transform: uppercase;
    font-size: 24px;
    color: orange;
    margin-left: 30px;
    padding: 30px 0;
}

.main-menu > li > a:hover{
    color: yellow;
}

li.has-submenu{
    position: relative;
}

.submenu{
    position: absolute;
    opacity: 0;
    top:50px;
    left: 30px;
    visibility: hidden;
    pointer-events: none;
    list-style: none;
    z-index: 1;
    width: 100px;
    background-color: black;
}

li.has-submenu:hover .submenu{
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}

.submenu a{
    display: block;
    padding:10px;
    text-decoration: none;
    color: yellow;
    transition: 0.5s;
}

.submenu a:hover{
    transform: translateX(10px);
}

.menu button{
    display: none;
}

.menu .close{
    display: none;
}

.menu span{
    display: none;
}

@media(max-width:800px){
    .main-menu{
        display: none;
    }

    .menu{
        padding: 30px  0;
    }

    .container .menu {
        display: flex;
        justify-content: flex-end;
    }

    .menu button{
        display: block;
        background-color: orange;
        border: 2px solid black;
        padding: 10px 15px;
        color: white;
        font-size: 1.125rem;
        text-transform: uppercase;
    }

    .main-menu-mobile{
        /* display: block; */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: 999;
        background-color: black;
        padding-top: 100px;
        padding-left: 50px;
    }
    
    .show{
        display: block !important;
    }


.menu .close{
    /* display: block; */
    position: fixed;
    top: 0;
    right: 0;
    z-index: 99999;
    font-size: 2.5rem;
    background-color: transparent;
    padding: 10px;
}
}
    </style>
</head>
<body>
<header class="header-Start">
    <button class="button"><a href="kontakt.php"><span class="material-symbols-outlined">call_made</span></a></button>
    <div class="container">
        <nav class="menu">
        <img src="images/pg_logo.png" alt="">
        <ul class="main-menu main-menu-mobile">
            <li><a href="Start.php">Start</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li class="has-submenu has-submenu-mobile"><a href="#">Aktualności</a>
                <ul class="submenu submenu-mobile">
                    <li><a href="#">Blog</a></li>
                </ul>
            </li>
            <li class="has-submenu has-submenu-mobile"><a href="#">Kalkulatory</a>
                <ul class="submenu submenu-mobile">
                    <li><a href="bmi.php">Bmi</a></li>
                    <li><a href="#">Krew</a></li>
                </ul>
            </li>
            <li><a href="APLIKACJA.php">Zaloguj sie</a></li>
           </ul>
           <span class="close" id="close">X</span>
           <button id="open">Menu</button>
        </nav>
    </div>
       <div class="container">
        <div class="header-Start-lewo">
            <h2>witaj!</h2>
            <p>Kontakt</p>
            <h3>Jeśli masz jakieś pytania, napisz nam na adres: <i>plan_treningowy@gmail.com</i></h3>
            <button><a href="Start.php">Cofnij</a></button>
        </div>
       </div>
    </header>
    <h2>Wpisz dane do skontaktowania.</h2>
    <form action="kontakt.php" method="post">
        <input type="text" name="imie"  class="logujj_input" placeholder="Imie">
        <div class="error">
            <?php
            if(isset($_SESSION['imie_error'])){
                echo($_SESSION['imie_error']);
            unset($_SESSION['imie_error']);
    }
            ?>
        </div>
        <input type="text" name="nazwisko"  class="logujj_input" placeholder="Nazwisko">
        <div class="error">
            <?php
            if(isset($_SESSION['nazwisko_error'])){
                echo($_SESSION['nazwisko_error']);
            unset($_SESSION['nazwisko_error']);
    }
            ?>
        </div>

        <input type="text" name="temat"  class="logujj_input" placeholder="Temat">
        <div class="error">
            <?php
            if(isset($_SESSION['temat_error'])){
                echo($_SESSION['temat_error']);
            unset($_SESSION['temat_error']);
    }
            ?>
        </div>

        <input type="text" name="opis"  class="logujj_input" placeholder="Opis zapytania">
        <div class="error">
        <?php
            if(isset($_SESSION['opis_error'])){
                echo($_SESSION['opis_error']);
            unset($_SESSION['opis_error']);
    }
            ?>
        </div>
        <input type="submit" value="Wyślij"  class="loguj_input" name="zaloza">
        <button class="loguj_input"><a href="Start.php">Powrot</a></button> 
    </form>
    <script src="./menu1.js"></script>

    <footer class="footer">
        <p>&copy 2022 Patryk Górka</p>
    </footer>
</body>
</html>
