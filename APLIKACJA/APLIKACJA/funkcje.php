<!--Dodaneeeeeeeeeee-->
<!--PIERWSZE OPERACJE-->
<?php
function show_users()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }

    $zapytanie = "SELECT imie, nazwisko, login, email FROM users";
    $wynik = $polaczenie->query($zapytanie);
       echo '<table border=1>';
        echo '<tr>';
        echo '<th>Imie</th>';
        echo '<th>Nazwisko</th>';
        echo '<th>Login</th>';
        echo '<th>Email</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>


<!--DRUGIE OPERACJE-->
<?php
function show_kobiety()
{
    echo 'Wybierz cwiczenia';
    }
?>

<!--Kobiety OPERACJA 1-->
<?php
function show_kobiety1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM kobiety WHERE rodzaj_cwiczenia='silowo'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
       //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Kobiety OPERACJA 2-->
<?php
function show_kobiety2()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM kobiety WHERE rodzaj_cwiczenia='obwodowo'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Kobiety OPERACJA 3-->
<?php
function show_kobiety3()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM kobiety WHERE rodzaj_cwiczenia='kondycyjnie'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Kobiety OPERACJA 4-->
<?php
function show_kobiety4()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM kobiety WHERE rodzaj_cwiczenia='regeneracyjnie'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Kobiety OPERACJA 5-->
<?php
function show_kobiety5()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM kobiety WHERE rodzaj_cwiczenia='rekreacyjnie'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>


<!--TRZECIE OPERACJE-->
<?php
function show_mezczyzni()
{
    echo 'Wybierz ćwiczenia';
    }
?>


<!--Mezczyzni OPERACJA 1-->
<?php
function show_mezczyzni1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM mezczyzni WHERE rodzaj_cwiczenia='silowo'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
       //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 2-->
<?php
function show_mezczyzni2()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM mezczyzni WHERE rodzaj_cwiczenia='obwodowo'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 3-->
<?php
function show_mezczyzni3()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM mezczyzni WHERE rodzaj_cwiczenia='kondycyjnie'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 4-->
<?php
function show_mezczyzni4()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM mezczyzni WHERE rodzaj_cwiczenia='regeneracyjnie'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 5-->
<?php
function show_mezczyzni5()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
 $zapytanie = "SELECT plec, rodzaj_cwiczenia, nazwa_cwiczenia, opis_cwiczenia FROM mezczyzni WHERE rodzaj_cwiczenia='rekreacyjnie'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>PLeć</th>';
        echo '<th>Rodzaj ćwiczenia</th>';
        echo '<th>Nazwa ćwiczenia</th>';
        echo '<th>Opis ćwiczenia</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>



<!-- pierwsze czerwone tło aplikacji skończone-->



<!--DRUGI CZERWONY BLOK-->
<?php
function show_dieta()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }

    $zapytanie = "SELECT plec, status_bmi FROM dieta";
    $wynik = $polaczenie->query($zapytanie);
       echo '<table border=1>';
        echo '<tr>';
        echo '<th>Pleć</th>';
        echo '<th>Dieta na: </th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--CZWARTE OPERACJE-->
<?php
function show_dieta_mezczyzni()
{
    echo 'Wybierz DIETĘ';
    }
?>


<!--Mezczyzni dieta OPERACJA 1-->
<?php
function show_dieta_mezczyzni1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='niedowaga' AND plec='mezczyzna'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Płeć</th>';
        echo '<th>Status BMI</th>';
        echo '<th>Dieta</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
       //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni dieta OPERACJA 2-->
<?php
function show_dieta_mezczyzni2()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='wychudzenie' AND plec='mezczyzna'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni dieta OPERACJA 3-->
<?php
function show_dieta_mezczyzni3()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='wyglodzenie' AND plec='mezczyzna'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 4-->
<?php
function show_dieta_mezczyzni4()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='dobra wartosc' AND plec='mezczyzna'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 5-->
<?php
function show_dieta_mezczyzni5()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='nadwaga' AND plec='mezczyzna'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 6-->
<?php
function show_dieta_mezczyzni6()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='otylosc' AND plec='mezczyzna'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>



<?php
function show_dieta_kobiety()
{
    echo 'Wybierz DIETĘ';
    }
?>


<!--Mezczyzni dieta OPERACJA 1-->
<?php
function show_dieta_kobiety1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='niedowaga' AND plec='kobieta'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
       //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni dieta OPERACJA 2-->
<?php
function show_dieta_kobiety2()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='wychudzenie' AND plec='kobieta'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni dieta OPERACJA 3-->
<?php
function show_dieta_kobiety3()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='wyglodzenie' AND plec='kobieta'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 4-->
<?php
function show_dieta_kobiety4()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='dobra wartosc' AND plec='kobieta'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 5-->
<?php
function show_dieta_kobiety5()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='nadwaga' AND plec='kobieta'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>

<!--Mezczyzni OPERACJA 6-->
<?php
function show_dieta_kobiety6()
{
    require_once('baza.php');

    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT plec, status_bmi, dieta FROM dieta WHERE status_bmi='otylosc' AND plec='kobieta'";
    $wynik = $polaczenie->query($zapytanie);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>Płeć</th>';
    echo '<th>Status BMI</th>';
    echo '<th>Dieta</th>';
    echo '</tr>';
    while($rezultat = $wynik->fetch_assoc()){
        echo '<tr>';
        foreach($rezultat as $rekord){
            echo '<td>' .$rekord . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
        //pozwala nam na wyczyszczynie wyniku zapytania
        $wynik->free_result();
        //nie zapominiec o tym
        $polaczenie->close();
    }
?>



<!-- pierwsze czerwone tło aplikacji skończone-->