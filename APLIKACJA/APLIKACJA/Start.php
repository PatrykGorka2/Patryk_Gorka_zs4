
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="stylowa.css">
    <title>Plan treningowy</title>
    <style>
        .kakaka{
            background-color: black;
        }

        .menu{
            margin-top: -30px;
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

.header-Start-lewo h2{
    font-size: 50px;
}
    </style>
</head>
<body>
    <header class="header-Start">
    <button class="button"><a href="Start.php"><span class="material-symbols-outlined">call_made</span></a></button>
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
            <p>Strona pozwoli Ci <br> lepiej rozplanować <br> twój plan!!</p>
            <h3>Jesteś zalogowany?</h3>
            <button><a href="index.php" target="blank_">ZALOGUJ SIĘ</a></button>
            <?php
        if(isset($_SESSION['error'])): ?>
        <div class="error">
        <?php echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
        </div>
        <?php endif; ?>
        <!--<div class="error"></div>-->
    </div>

        </div>
       </div>
    </header>
    <section class="www">
        <div class="container">
            <h2>PLAN TRENINGOWY - CO TO TAKIEGO?</h2>
            <p class="p">Plan treningowy to sposób na rozplanowanie aktywności fizycznej w taki sposób, by dopasować poziom wysiłku i częstotliwość ćwiczeń do indywidualnych potrzeb. Harmonogram ćwiczeń to rozwiązanie nie tylko dla osób starających się dbać o kondycję lub wyrzeźbić sylwetkę. Odpowiedni plan treningowy jest ważny również w przypadku zdrowia osób zmagających się z nadwagą lub otyłością.</p>
            <div class="www-items">
                <div class="www-item">
                    <img src="images/div11.png" alt="">
                    <h4>Trening</h4>
                    <p>Właściwie ułożony plan treningowy to podstawa dla każdej osoby, która chce ćwiczyć. Samodzielne ułożenie harmonogramu aktywności fizycznej jest możliwe, ale może być trudne dla osoby początkującej. Układaniem specjalnych planów treningowych, często połączonych z indywidualnie dopasowaną dietą, zajmują się trenerzy personalni. Taka forma pracy nad sprawnością fizyczną jest o tyle skuteczna, że zwiększa motywację i pomaga zachować regularność treningów.</p>
                </div>
                <div class="www-item">
                    <img src="images/div2.png" alt="">
                    <h4>Motywacja</h4>
                    <p>Gdy mowa o pracy nad sylwetką, motywacja jest jedną z podstawowych kwestii. To ona sprawia, że zabieramy się do pracy mimo beznadziejnej pogody czy nieco gorszego samopoczucia. To ona pozwala powstrzymać się przed zrobieniem jednego gryza więcej oraz motywuje do zachowywania regularności treningów.</p>
                </div>
                <div class="www-item">
                    <img src="images/div3.png" alt="">
                    <h4>Rezultaty</h4>
                    <p>Twoje ciało stanie się jędrniejsze, a skóra bardziej napięta. Przy angażowaniu do wysiłku poszczególnych grup mięśniowych poczujesz, że są mocniejsze. Mogą być już nawet delikatnie zarysowane. Możesz oczekiwać także większej sprawności i lepszej kondycji. Przy okazji poprawi się samopoczucie, samoocena oraz pewność siebie. Można więc powiedzieć, że plan trening nie wpływa tylko na wygląd ale też na charakter.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="container">
            <h2>CO POWINIEN ZAWIERAC DOBRY PLAN TRENINGOWY???</h2>
            <div class="project">
            <div class="project-content">
                    <h4>1. Cel treningowy</h4>
                    <span></span>
                <p>Najważniejsze jest określenie celu treningowego – można budować masę mięśniową, siłę, przeprowadzać redukcję, wzmacniać ciało, wytrzymałość lub wiele innych cech. Już w momencie określania celu należy wybrać kierunek. Programowanie treningu powinno być spersonalizowane – należy wziąć pod uwagę możliwości fizyczne, czasowe i predyspozycje genetyczne ćwiczącego, dostępny sprzęt oraz możliwość regeneracji. Jeśli ktoś chce osiągnąć maksymalne efekty związane z celem treningowym, musi dobrać do niego konkretne ćwiczenia. Po skończonym makrocyklu, czyli jednostkach treningowych, które pomogły osiągnąć założony cel, należy zaprogramować plan od nowa i dopasować go do kolejnych założeń.</p>
                </div>
                <div class="project-image">
                    <img src="images/cel_treningowy.png" alt="">
            </div>
            </div>
            <div class="project">
            <div class="project-content">
                    <h4>2. Częstotliwość treningów</h4>
                    <span></span>
                <p>W dobrze spersonalizowanym planie treningowym częstotliwość treningowa jest dostosowana do możliwości genetycznych, aktualnego poziomu wytrenowania czy też możliwości czasowych ćwiczącego. Regularność treningowa jest czynnikiem, który determinuje pojawienie się efektów. Jeśli ktoś dostosował plan do możliwości czasowych, w momencie, gdy ma słabszy dzień, powinien wykonać założoną pracę. Dlaczego? Bo każdy trening będzie lepszy niż jego brak. To nie pojedynczy trening wpływa na pojawienie się efektów. Jeśli praca będzie wykonywana systematycznie, pojawią się efekty, osiągi będą większe. Jednym z najczęściej popełnianych błędów przez ćwiczących jest zrezygnowanie z regularnych treningów po zobaczeniu pierwszych efektów.</p>
                </div>
                <div class="project-image">
                    <img src="images/częstotliwość_treningow.png" alt="">
                </div>
            </div>
            <div class="project">
            <div class="project-content">
                    <h4>3. Długość treningu i przerwy między seriami</h4>
                    <span></span>
                <p>Długość treningu oraz przerw między seriami oczywiście zależy od celu treningowego. Gdy celem jest zwiększenie masy mięśniowej czy siły, przerwy będą dłuższe, aby odpocząć i podejść do kolejnej serii z maksymalną mocą. Długość w tym przypadku nie ma znaczenia, ale nie warto przekraczać 3–4 minut, aby nie ochłodzić mięśni. Jednocześnie przerwy powinny być tak skonstruowane, aby nie spędzać na treningu 2–3 h. Trening ma być mocny, możliwie szybki i trwać 1–1,5 h.</p>
                </div>
            <div class="project-image">
                    <img src="images/przerwy.png" alt="">
                </div>
            </div>
            <div class="project">
            <div class="project-content">
                    <h4>4. Kolejność grup mięśniowych i wybór ćwiczeń </h4>
                    <span></span>
                <p>W większości planów treningowych kolejność grup jest taka sama. Zaczyna się od największej grupy, tej, która wymaga od ćwiczącego najwięcej energii, następnie przechodzi do mniejszych partii oraz ćwiczeń, które wymagają trochę mniejszego nakładu sił. Ale czy tak jest zawsze? Nie, wszystko zależy od priorytetów treningowych, założeń, a także doświadczenia i przebytych kontuzji.</p>
                </div>
                <div class="project-image">
                    <img src="images/miesnie.png" alt="">
                </div>
            </div>
            <div class="project">
            <div class="project-content">
                    <h4>5. Progresja treningowa</h4>
                    <span></span>
                <p>Dobrze skonstruowany plan treningowy będzie zawierał mikrocykle, mezocykle oraz makrocykle. W skrócie – będzie zakładał stałą progresję ciężaru, liczby powtórzeń, czyli zwiększanie objętości treningowej czy intensywności. Nie można bazować na każdym treningu na tym samym ciężarze, tej samej liczbie powtórzeń czy serii. Organizm bardzo szybko adaptuje się do wysiłku, co sprawia, że efekty nie będą współmierne do włożonej pracy.</p>
                </div>
            <div class="project-image">
                    <img src="images/progresja.png" alt="">
                </div>
            </div>
            <div class="project">
                <div class="project-content">
                    <h4>6. Śledzenie i kontrola planu treningowego</h4>
                    <span></span>
                <p> Gdy już plan treningowy zostanie dostosowany do celu, predyspozycji, trybu życia czy diety, bardzo ważne jest śledzenie progresji. Najlepiej na trening zabrać notes z długopisem lub telefon i notować liczbę serii, powtórzeń i ciężar wykorzystany w danym ćwiczeniu, aby w kolejnym tygodniu podnieść mięśniom poprzeczkę, co skłoni je do wzrostu.</p>
                </div>
                <div class="project-image">
                    <img src="images/pilnowanie.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <script src="./menu1.js"></script>

    <section class="koniec">
        <div class="koniec_">
            <div><p>Jeżeli jesteś zainteresowany to zaloguj się na stronie i stwórz swój własny plan treningowy!</p></div>
            <div><button><a href="index.php" target="blank_">Przejdź do logowania</a></button></div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy 2022 Patryk Górka</p>
    </footer>
</body>
</html>