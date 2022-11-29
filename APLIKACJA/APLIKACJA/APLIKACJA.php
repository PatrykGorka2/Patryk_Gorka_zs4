<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
          

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="apka.css">
    <title>APLIKACJA</title>
    <style>
     
        .kolor_wyboru{
            color: white;
        }

        .error{
            text-align: center;
            color: white;
        }

        td{
            border: 2px solid black;
            padding: 5px;
            font-size: 20px;
        }

        th{
            font-size: 23px;
            text-transform: uppercase;
        }

        table{
            margin-top: 30px;
            margin-bottom: 20px;
            width: 100%;
            border-top: 3px solid black;
            border-bottom: 3px solid red;
            background-color: lightgrey;
        }

        ol li{
            height: 35px;
        }

        .table{
             margin-top:100px;
         }

        .aplikacja-content .container{
            margin-bottom:20px;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            text-align: center;
        }

        .logujjjjj_input{
            width: 400px;
            background-color: whitesmoke;
            color: black;
            border: 2px solid black;
            margin-top: 10px;
            padding: 7px 0;
            font-weight: bold;
            font-size: 15px;
        }

        .logujjjj_input{
            width: 300px;
            background-color: black;
            border: 2px solid whitesmoke;
            color: white;
            margin-top: 10px;
            padding: 7px 0;
            font-weight: bold;
            font-size: 15px;
        }

        .logujjjj_input:hover{
            transition: 0.6s;
            padding: 16px;
            border-radius: 15px;
        }


        .kobiety-cwiczenia{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .mezczyzni-cwiczenia{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }


    </style>
</head>
<body>
    <header class="header-Start">
    <button class="button"><a href="APLIKACJA.php"><span class="material-symbols-outlined">call_made</span>Resrart srtony</a></button>
    <div class="container">
        <nav class="menu">
        <img src="images/pg_logo.png" alt="">
        <ul class="main-menu main-menu-mobile">
            <li><a href="Start.php">Start</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            </li>
            <li class="has-submenu has-submenu-mobile"><a href="#">Kalkulatory</a>
                <ul class="submenu submenu-mobile">
                    <li><a href="bmi.php">Bmi</a></li>
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
            <p>Stwórz swój własny <br> Plan treningowy <br> całkiem sam!!</p>
            <h3>Zainteresowany?</h3>
            <button><a href="wyloguj.php" target="blank_">Wyloguj się<span class="material-symbols-outlined">logout</span></a></button>
        </div>
       </div>
    </header>
   


    <section class="aplikacja-content">
                <!--
//////////////////////////// tutaj sprawdzamy cwiczenia z bazy danych dla kobiet lub mezczyzn
        -->
        <div class="container">

        <h2>Wybierz operacje do wykonania</h2>
    <div>
    <h1>WYŚWIETL UŻYTKOWNIKÓW</h1>
    <div>
    <form action="" method="post">
        <input type="submit" value="Pokaz uzytkownikow" name='pokaz1' class="logujjjjj_input">
    </form>
        <?php
        if(isset($_POST['pokaz1'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_users();
        }
        ?>
    </div>



    <h1>WYBIERZ ĆWICZENIA</h1>


    <form action="" method="post">
        <input type="submit" value="WSZYSTKIE Cwiczenia dla Mezczyzn" name='pokaz2' class="logujjjjj_input">
    </form>
        <?php
        if(isset($_POST['pokaz2'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_mezczyzni();
        }
        ?>




<div class="kobiety-cwiczenia">


<!-- na sile -->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na siłę - mężczyźni" name='sila-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['sila-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_mezczyzni1();
        }
        ?>


<!-- na obwod -->
<form action="" method="post">
        <input type="submit" value="Ćwiczenie na obwód - mężczyźni" name='obwod-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['obwod-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_mezczyzni2();
        }
        ?>


<!-- na kondycje -->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na kondycje - mężczyźni" name='kondycja-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['kondycja-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_mezczyzni3();
        }
        ?>


<!-- na regeneracje-->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na regenerację - mężczyźni" name='regeneracja-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['regeneracja-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_mezczyzni4();
        }
        ?>


<!-- na rekreacje-->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na rekreację - mężczyźni" name='rekreacja-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['rekreacja-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_mezczyzni5();
        }
        ?>

</div>


<form action="" method="post">
        <input type="submit" value="WSZYSTKIE Cwiczenia dla Kobiet" name='pokaz3' class="logujjjjj_input">
    </form>
        <?php
        if(isset($_POST['pokaz3'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_kobiety();
        }
        ?>



<!-- na sile -->
<div class="mezczyzni-cwiczenia">
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na siłę - kobiety" name='sila-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['sila-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_kobiety1();
        }
        ?>


<!-- na obwod -->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na obwód - kobiety" name='obwod-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['obwod-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_kobiety2();
        }
        ?>


<!-- na kondycje -->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na kondycję - kobiety" name='kondycja-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['kondycja-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_kobiety3();
        }
        ?>


<!-- na regeneracje-->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na regenerację - kobiety" name='regeneracja-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['regeneracja-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_kobiety4();
        }
        ?>


<!-- na rekreacje-->
<form action="" method="post">
        <input type="submit" value="Ćwiczenia na rekreację - kobiety" name='rekreacja-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['rekreacja-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_kobiety5();
        }
        ?>

        </div>

<!-- //dalsza czesc kodu -->


        </div>
    </div>
   
        
      
        <!--
////////////////////////////tutaj wykonujemy operacje, 
ktora bedzie polegala na okresleniu diety
DO POPRAWY - TEGO TU NIE POWINNO BYC BO NIE
        -->
        
        
   
    </section>












    <section class="aplikacja-content">
                <!--
//////////////////////////// tutaj sprawdzamy cwiczenia z bazy danych dla kobiet lub mezczyzn
        -->
        <div class="container">

        <h2>Wybierz dietę do wyświetlenia</h2>
    <div>
    <h1>WYŚWIETL DIETĘ</h1>
    <div>
    <form action="" method="post">
        <input type="submit" value="Pokaż diety" name='dieta' class="logujjjjj_input">
    </form>
        <?php
        if(isset($_POST['dieta'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta();
        }
        ?>
    </div>



    <h1>WYBIERZ DIETĘ</h1>


    <form action="" method="post">
        <input type="submit" value="WSZYSTKIE Diety dla Mezczyzn" name='dieta_mezczyzni' class="logujjjjj_input">
    </form>
        <?php
        if(isset($_POST['dieta_mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni();
        }
        ?>




<div class="kobiety-cwiczenia">


<!-- na sile -->
<form action="" method="post">
        <input type="submit" value="Niedowga - mężczyźni" name='niedowaga-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['niedowaga-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni1();
        }
        ?>


<!-- na obwod -->
<form action="" method="post">
        <input type="submit" value="Wychudzenie - mężczyźni" name='wychudzenie-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['wychudzenie-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni2();
        }
        ?>


<!-- na kondycje -->
<form action="" method="post">
        <input type="submit" value="Wygłodzenie - mężczyźni" name='wyglodzenie-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['wyglodzenie-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni3();
        }
        ?>


<!-- na regeneracje-->
<form action="" method="post">
        <input type="submit" value="Dobra wartość - mężczyźni" name='dobra-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['dobra-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni4();
        }
        ?>


<!-- na rekreacje-->
<form action="" method="post">
        <input type="submit" value="Nadwaga - mężczyźni" name='nadwaga-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['nadwaga-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni5();
        }
        ?>

        <!-- na rekreacje-->
<form action="" method="post">
        <input type="submit" value="Otyłość - mężczyźni" name='otylosc-mezczyzni' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['otylosc-mezczyzni'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_mezczyzni6();
        }
        ?>

</div>


<form action="" method="post">
        <input type="submit" value="WSZYSTKIE Diety dla Kobiet" name='dieta_kobiety' class="logujjjjj_input">
    </form>
        <?php
        if(isset($_POST['dieta_kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety();
        }
        ?>



<!-- na sile -->
<div class="mezczyzni-cwiczenia">
<form action="" method="post">
        <input type="submit" value="Niedowaga - kobiety" name='niedowaga-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['niedowaga-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety1();
        }
        ?>


<!-- na obwod -->
<form action="" method="post">
        <input type="submit" value="Wychudzenie - kobiety" name='wychudzenie-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['wychudzenie-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety2();
        }
        ?>


<!-- na kondycje -->
<form action="" method="post">
        <input type="submit" value="Wygłodzenie - kobiety" name='wyglodzenie-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['wyglodzenie-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety3();
        }
        ?>


<!-- na regeneracje-->
<form action="" method="post">
        <input type="submit" value="Dobra wartość - kobiety" name='dobra-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['dobra-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety4();
        }
        ?>


<!-- na rekreacje-->
<form action="" method="post">
        <input type="submit" value="Nadwaga - kobiety" name='nadwaga-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['nadwaga-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety5();
        }
        ?>

<form action="" method="post">
        <input type="submit" value="Otyłość - kobiety" name='otylosc-kobiety' class="logujjjj_input">
    </form>
        <?php
        if(isset($_POST['otylosc-kobiety'])){
            require_once('funkcje.php');
            //pokliknieciu przycisku wywoluje funkcje wyswietlajaca uzywkownikow
            show_dieta_kobiety6();
        }
        ?>

        </div>

<!-- //dalsza czesc kodu -->


        </div>
    </div>
   
        
      
        <!--
////////////////////////////tutaj wykonujemy operacje, 
ktora bedzie polegala na okresleniu diety
DO POPRAWY - TEGO TU NIE POWINNO BYC BO NIE
        -->
        
        
   
    </section>



    
    <script src="./menu1.js"></script>
    <footer class="footer">
        <p>&copy 2022 Patryk Górka</p>
    </footer>
</body>
</html>