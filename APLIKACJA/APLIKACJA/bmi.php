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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Klalkulator BMI</title>
    <link rel="stylesheet" href="apka.css">

    <style>


        .header-Start{
            font-family: 'Saira Condensed', sans-serif;
        }

        .loguj_input{
        height: 90px;
        border: 3px solid white;
        border-radius: 25px;
        background-color: red;
        cursor: pointer;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-top: 50px;
        transition: 0.5s;
        width: 350px;
        }

        .loguj_input a{
            text-decoration: none;
            color: white;
        }

        .loguj_input:hover{
        background-color: black;
        color: white;
        }

        .project p{
            margin-top: 50px;
            font-size: 2rem;
            color: black;
            text-transform: uppercase;
            font-family: 'Saira Condensed', sans-serif;
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
            <p>KALKULATOR BMI</p>
            <h3>Podejmij <br> dalsze działania</h3>
            <button><a href="APLIKACJA.php">Cofnij</a></button>
        </div>
       </div>
    </header>
<section class="www">
        <div class="container">
            <h2>Kalkulator BMI – obliczanie prawidłowej masa ciała, normy, ryzyko chorób</h2>
            <p class="p">Kalkulator BMI to najłatwiejszy i najszybszy sposób na samodzielne wyliczenie prawidłowej masy ciała. Dzięki niemu możemy szybko i łatwo poznać stan naszej tkanki tłuszczowej i określić, czy nasz styl życia oraz dieta są odpowiednie. Jaka jest prawidłowa masa ciała, od czego zależy i o czym może świadczyć nieprawidłowy wynik BMI? Sprawdzamy, jak obliczyć BMI.</p>
            <div class="www-items">
                <div class="www-item">
                <h4>BMI</h4>
                    <p>Właściwie ułożony plan treningowy to podstawa dla każdej osoby, która chce ćwiczyć. Samodzielne ułożenie harmonogramu aktywności fizycznej jest możliwe, ale może być trudne dla osoby początkującej. Układaniem specjalnych planów treningowych, często połączonych z indywidualnie dopasowaną dietą, zajmują się trenerzy personalni. Taka forma pracy nad sprawnością fizyczną jest o tyle skuteczna, że zwiększa motywację i pomaga zachować regularność treningów.</p>
                    <img src="images/bmisprawdz.png" alt="">
                </div>
                <div class="www-item">
                <h4>Czym jest wskaźnik BMI?</h4>
                    <p>BMI (Body Mass Index), nazywany inaczej wskaźnikiem Queteleta, wykorzystywany jest do oszacowania, czy waga ciała jest prawidłowa. Beligijski statystyk Adolf Queteleta opracował indeks masy ciała w 1832 roku. Wówczas zaobserwował on, że masa ciała rośnie w zależności od wzrostu danej osoby. Wskaźnik BMI to narzędzie, które pozwala zorientować się, czy nasza dieta oraz styl życia są właściwe, a także czy powinniśmy udać się do specjalisty z prośbą o pomoc. To również najszybsza droga do pierwszej diagnozy lekarskiej ­– kontrola indeksu BMI służy monitorowaniu stanu zdrowia naszego organizmu. <br> <br> Osoby chcące obniżyć wysoki wskaźnik BMI mogą wspomóc proces obniżania wagi stosując suplement diety na metabolizm Berberyna 400 mg. Wskaźnik BMI jest nieskomplikowanym wzorem matematycznym, który pozwala określić zawartość tkanki tłuszczowej w naszym organizmie, w oparciu o proporcję masy ciała (kg) do wzrostu (w metrach). BMI dla dzieci i młodzieży zostało zmodyfikowane i naniesione na siatki centylowe, odpowiednio dla dziewczynek i chłopców.</p>
                </div>
                <div class="www-item">
                <h4>Jak obliczyć BMI?</h4>
                    <p>Obliczanie BMI opiera się na wzięciu pod uwagę trzech kluczowych informacji, których znajomość nie wymaga wykonywania żadnych badań lekarskich. W celu sprawdzenia, czy nasza masa ciała jest prawidłowa, musi uwzględnić wagę, wzrost oraz płeć. Wynik w kalkulatorze BMI otrzymywany jest poprzez podzielenie masy ciała podanej w kilogramach przez kwadrat wzrostu podanego w centymetrach. Uwzględnia się również, czy indeks oblicza kobieta, czy mężczyzna. Jest to bardzo istotna informacja, ponieważ z przyczyn biologicznych prawidłowa zawartość tłuszczu u kobiet jest wyższa niż u mężczyzn. Towarzyszy temu jednocześnie mniejsza ilość mięśni niż u mężczyzn.<br><br>Obie płcie o zbliżonym wzroście będą miały podobny wskaźnik BMI, jednak z dużym prawdopodobieństwem poziom tkanki tłuszczowej u kobiety będzie wyższy niż u mężczyzny. Należy pamiętać, że ryzyko chorób zwiększa zawartość tkanki tłuszczowej, a nie sama masa ciała. Oprócz tego ważną rolę odgrywa rozmieszczenie tej tkanki tłuszczowej. Bardzo niebezpieczne jest otłuszczenie narządów wewnętrznych. Określenie rozłożenia tłuszczu w organizmie wymaga posłużenia się innym wskaźnikiem (WHR), którego wyliczenie nie jest jednak tak proste ani możliwe w warunkach domowych.</p>
                </div>
                <div class="www-item">
                <h4>Wzór BMI</h4>
                    <p>Wskaźnik BMI podaje się w kilogramach na metr kwadratowy (np. BMI 23 kg/m² jest wartością prawidłową).
                        Jeżeli wysokość naszego wskaźnika BMI budzi niepokój, warto skonsultować się z dietetykiem, który pomoże wprowadzić do naszej diety odpowiednie zmiany i zmienić nasz sposób odżywiania na lepsze. Warto rozważyć możliwość umówienia bezpiecznej konsultacji z dietetykiem online.</p>
                </div>
                <div class="www-item">
                <h4>Wskaźnik BMI</h4>
                    <p>Licznik BMI podaje wynik według podstawowej lub poszerzonej klasyfikacji dla osób dorosłych. Ta pierwsza wyróżnia cztery różne oceny wagi, natomiast rozszerzona wyróżnia również trzy stopnie niedowagi i trzy stopnie otyłości: <br><br>- niedowaga (<i>poniżej 18,5</i>), <br><br>-wychudzenie (<i>poniżej 17</i>), <br><br>-wygłodzenie (<i>poniżej 16<i>) <br><br>-wartość prawidłowa (<i>od 18,5 do 24,9<i>)<br><br>-nadwaga (<i>od 25 do 29,9<i>)<br><br>-otyłość (<i>powyżej 30<i>)</p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project">
        <div class="container">
            <h4>Skorzystaj z kalkulatora</h4>
        <form method="post" action="">
    <input type="number" name="wzrost" placeholder="Podaj swoj wzrost w cm">
    <input type="number" name="waga" placeholder="Podaj swoja mase w kg">
    <input type="submit" value="OBLICZ">
</form>  
            <?php
    if(isset($_POST['wzrost'])){
        if(empty($_POST['wzrost'])|| empty($_POST['waga'])){
            echo '<p>Coś poszło nie tak! <br> Wprowadź hasło albo login</p>';
        }
        else{
            if(isset($_POST['wzrost'])){
                $a = $_POST['wzrost'];
                $b = $_POST['waga'];
                $c = $b*10000;
                $bmi = ($c)/pow($a, 2);
                if($bmi<18.5){
                    echo '<br> Twoje BMI to: ';
                    echo $bmi;
                    echo '<p>Oznacza to nadwagę</p>';
                }
                elseif($bmi>18.5 && $bmi<24.99){
                    echo '<br> Twoje BMI to: ';
                    echo $bmi;
                    echo '<p>Oznacza to wartość prawidłową</p>';
                }
                else{
                    echo '<br> Twoje BMI to: ';
                    echo $bmi;
                    echo '<p>Oznacza to niedowagę</p>';
                }
            }
        }
    }?>
    

        </div>
    </section>
    <script src="./menu1.js"></script>
    <footer class="footer">
        <p>&copy 2022 Patryk Górka</p>
    </footer>
</body>
</html>
