<?php
session_start();
?>
<?php
    //pobieramy dane z formularza\

    if(isset($_POST['loguj'])){
    if(empty($_POST['login']) || empty($_POST['haslo'])){
        $_SESSION['error'] = 'Wpisz login i haslo';
        header('Location: index.php');
        exit();
    }
}
?>

<?php

//proces łączenia się z bazą danych i weryfikacja użytkownika
            $login = $_POST['login'];
            $haslo = $_POST['haslo']; 


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

            //weryfikacja loginu
            $zapytanie = "SELECT login FROM users WHERE login='$login'";
            $wynik = $polaczenie->query($zapytanie);

            //jasli baza zwroci nam dokladnie jeden rekord
           
            if($wynik->num_rows == 1){
                //weryfikacja hasla
                $zapytanie = "SELECT haslo FROM users WHERE login='$login'";
                $wynik = $polaczenie->query($zapytanie);
                $rekord = $wynik->fetch_assoc();
                
                if($rekord['haslo'] = $haslo){
                    $_SESSION['user'] = $login;
                    header('Location: serwis.php');
                }else{
                    $_SESSION['error'] = 'Bledny login';
                header('Location: index.php');
                exit();
                }
            }else{
                $_SESSION['error'] = 'Bledny login';
                header('Location: index.php');
                exit();
            }

            $polaczenie->close();


?>