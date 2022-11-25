-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lis 2022, 23:09
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `grupa1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dieta`
--

CREATE TABLE `dieta` (
  `dietaID` int(11) NOT NULL,
  `plec` tinytext DEFAULT NULL,
  `status_bmi` text DEFAULT NULL,
  `dieta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dieta`
--

INSERT INTO `dieta` (`dietaID`, `plec`, `status_bmi`, `dieta`) VALUES
(1, 'kobieta', 'niedowaga', 'Zaleca się jeść więcej produktów bogatych w tłuszcz. Nie można zapominieć o owocach na przekąske ;)'),
(2, 'kobieta', 'wychudzenie', 'Nie należy spożywać za dużo pokarmów typu fast-food, czy też słonych przekąsek – chipsów, paluszków, krakersów. Kiedy wychudzenie organizmu jest większe, należy zastosować dietę łatwo strawną bogatobiałkową. Dieta ta dostarcza należytą ilość białka do budowy i odbudowy tkanek, enzymów, hormonów, białek osocza. ;)'),
(3, 'kobieta', 'wyglodzenie', 'Przy niedożywieniu powinno zwiększyć się spożycie węglowodanów. Zaleca się produkty o dużej wartości energetycznej, ale o małej objętości – cukier, miód, konfitury oraz dżemy. Należy dodawać cukier, najlepiej trzcinowy, do wszystkich napojów, soków oraz koktajli. ;)'),
(4, 'kobieta', 'dobra wartosc', 'Wyglada na to, że twoja dieta nie jest taka zła. Nie zapomnij tylko o owocach i warzywach ;)'),
(5, 'kobieta', 'nadwaga', 'Unikaj nadmiernego spożywania tłuszczu i cukru w postaci tłustych mięs, pełnotłustych produktów mlecznych i słodyczy. Komponuj posiłki tak, aby około połowę talerza podczas śniadania, obiadu i kolacji zajmowały warzywa. Wybieraj chude mięsa i wędliny. ;)'),
(6, 'kobieta', 'otylosc', 'Przede wszystkim Unikaj nadmiernego spożywania tłuszczu i cukru 	jeszcze bardziej w postaci tłustych mięs, pełnotłustych produktów mlecznych i słodyczy. Komponuj posiłki tak, aby około połowę talerza podczas śniadania, obiadu i kolacji zajmowały warzywa. Wybieraj chude mięsa i wędliny. ;)'),
(7, 'mezczyzna', 'wychudzenie', 'Nie należy spożywać za dużo pokarmów typu fast-food, czy też słonych przekąsek – chipsów, paluszków, krakersów. Kiedy wychudzenie organizmu jest większe, należy zastosować dietę łatwo strawną bogatobiałkową. Dieta ta dostarcza należytą ilość białka do budowy i odbudowy tkanek, enzymów, hormonów, białek osocza. ;)'),
(8, 'mezczyzna', 'wyglodzenie', 'Przy niedożywieniu powinno zwiększyć się spożycie węglowodanów. Zaleca się produkty o dużej wartości energetycznej, ale o małej objętości – cukier, miód, konfitury oraz dżemy. Należy dodawać cukier, najlepiej trzcinowy, do wszystkich napojów, soków oraz koktajli. ;)'),
(9, 'mezczyzna', 'dobra wartosc', 'Wyglada na to, że twoja dieta nie jest taka zła. Nie zapomnij tylko o owocach i warzywach ;)'),
(10, 'mezczyzna', 'nadwaga', 'Unikaj nadmiernego spożywania tłuszczu i cukru w postaci tłustych mięs, pełnotłustych produktów mlecznych i słodyczy. Komponuj posiłki tak, aby około połowę talerza podczas śniadania, obiadu i kolacji zajmowały warzywa. Wybieraj chude mięsa i wędliny. ;)'),
(11, 'mezczyzna', 'otylosc', 'Przede wszystkim Unikaj nadmiernego spożywania tłuszczu i cukru 	jeszcze bardziej w postaci tłustych mięs, pełnotłustych produktów mlecznych i słodyczy. Komponuj posiłki tak, aby około połowę talerza podczas śniadania, obiadu i kolacji zajmowały warzywa. Wybieraj chude mięsa i wędliny. ;)'),
(12, 'mezczyzna', 'niedowaga', 'Zaleca się jeść więcej produktów bogatych w tłuszcz. Nie można zapominieć o owocach na przekąske ;)');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `informacje_o_uzytkowniku`
--

CREATE TABLE `informacje_o_uzytkowniku` (
  `infoID` int(11) NOT NULL,
  `plec` tinytext DEFAULT NULL,
  `rodzaj_cwiczenia` tinytext DEFAULT NULL,
  `czestotliwosc` tinytext DEFAULT NULL,
  `staz` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kobiety`
--

CREATE TABLE `kobiety` (
  `kobietaID` int(11) NOT NULL,
  `status_bmi` tinytext DEFAULT NULL,
  `rodzaj_cwiczenia` tinytext DEFAULT NULL,
  `nazwa_cwiczenia` tinytext DEFAULT NULL,
  `opis_cwiczenia` text DEFAULT NULL,
  `plec` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kobiety`
--

INSERT INTO `kobiety` (`kobietaID`, `status_bmi`, `rodzaj_cwiczenia`, `nazwa_cwiczenia`, `opis_cwiczenia`, `plec`) VALUES
(8, 'ok', 'obwodowo', 'Krazenia ramion', 'Zacznij powoli wykonywać małe koła w przód spokojnie przy tym oddychając. Ćwiczenie powinno trwać ok 10 sekund.', 'kobieta'),
(9, 'ok', 'silowo', 'Wioslowanie sztanga w opadzie', '1) Utrzymując prawidłową pozycję, wykonaj wdech, a następnie przyciągnij sztangę pionowo w górę, kierując ją w stronę mostka, jednocześnie maksymalnie zbliżając łopatki do kręgosłupa. 2) Zatrzymaj ruch na ułamek sekundy w momencie, kiedy sztanga znajdzie się blisko tułowia.', 'kobieta'),
(10, 'ok', 'regeneracyjnie', 'Rozciaganie', 'napiąć mięśnie lub grupę mięśni przez naciskanie jak największą siłą od 10–30 sekund (napięcie izometryczne), - rozluźnić mięśnie na 2–3 sekundy, - spokojnie rozciągać mięśnie i pozostać w tej pozycji maksymalnej tyle samo co przy napinaniu (10–30 sekund).', 'kobieta'),
(11, 'ok', 'kondycyjnie', 'Interwaly', 'Trening interwałowy polega na przeplataniu wysiłku o wysokiej intensywności, z wysiłkiem o intensywności niskiej. Dla przykładu interwałem będzie trening:\r\n1 minuta truchtu/30 sekund szybkiego biegu — powtarzamy 10 razy\r\nJednak interwały nie muszą składać się z biegania. Trening o różnej intensywności możemy włączyć praktycznie do każdej aktywności np. przy skakaniu na skakance, wykonywaniu burpees czy jeździe na rowerze.\r\nCo więcej, nie każdy interwał w danym treningu musi być taki sam. Można sobie długości poszczególnych odcinków i przerw modyfikować — w zależności od formy i stawianego celu.', 'kobieta'),
(12, 'ok', 'rekreacyjnie', 'Jazda na rowerku stacjonarnym', 'Treningi na rowerku stacjonarnym bardzo dobrze wpływają też na kształtowanie sylwetki i mięśni łydek, ud oraz pośladków. Efekty są jednak nie tylko wizualne. Interwałowe treningi na rowerku poprawiają wytrzymałość, kondycję i ogólną sprawność organizmu. Regularny wysiłek na rowerku zredukuje także ryzyko chorób serca.', 'kobieta'),
(13, 'ok', 'silowo', 'Wyciskanie hantli na ławce płaskiej', 'Połóż się na ławce na plecach, z wyprostowanymi przed sobą ramionami. Nogi ustaw stabilnie na podłodze, kolana skieruj na zewnątrz. Napnij mięśnie pośladkowe, ściągnij łopatki do tyłu i w dół, klatkę piersiową wypchnij w przód, głowę ustaw w pozycji neutralnej. Hantle trzymaj symetrycznie do siebie.', 'kobieta'),
(14, 'ok', 'silowo', 'Podciąganie z użyciem gumy', 'Guma ma za zadanie wspomóc ruch koncentryczny mięśni grzbietu, tak aby osoba mogła \"prawie\"o własnych siła podciągnąć się w górę.', 'kobieta'),
(15, 'ok', 'silowo', 'Przysiad sumo z kettlebell', 'Jest to świetne ćwiczenie na pośladki oraz nogi.\r\nAby poprawnie wykonywać to ćwiczenie, trzeba stanąć w rozkroku, kettlebell trzymamy przy klatce piersiowej.\r\nNależy pamiętać, aby mieć proste plecy i napięty brzuch. Jeśli jesteśmy już w pozycji wyjściowej, to wykonujemy przysiad.', 'kobieta'),
(16, 'ok', 'silowo', 'Deska', 'Plank, deska, podpór na przedramionach – statyczne ćwiczenie izometryczne angażujące wszystkie mięśnie głębokie brzucha, a także mięśnie pleców, ramion oraz nóg. Klasyczny plank to podpór na przedramionach i palcach stóp z utrzymaniem naturalnej krzywizny kręgosłupa. Wykonywany jest jednak w różnych wariantach.', 'kobieta'),
(17, 'ok', 'silowo', 'Pompki na kolanach', 'Jest to ćwiczenie na mięśnie klatki piersiowej, które jest bardzo podobne do zwykłych pompek, jednakże różni się tym, że ciężar ciała jest oparty nie tylko na dłoniach ale również na kolanach.\r\nKiedy znajdujemy się już w pozycji wyjściowej, to zbliżamy tułów do maty poprzez zginanie łokci, a potem prostujemy poprzez wyprostowanie łokci.', 'kobieta'),
(18, 'ok', 'silowo', 'Przysiady', 'Jest to doskonałe ćwiczenie na nogi oraz pośladki, aby je wykonać wystarczy stanąć w rozkroku na szerokość bioder i wykonać przysiad.\r\nPamiętaj, aby wykonywać to ćwiczenie na pełnych stopach oraz mieć spięty brzuch i proste plecy.', 'kobieta'),
(19, 'ok', 'obwodowo', 'Przysiady bułgarskie z hantlami.', 'Przysiad bułgarski to ćwiczenie angażujące wiele partii mięśniowych, przede wszystkim ud i pośladków. Jest większym wyzwaniem niż klasyczny przysiad, ponieważ wymaga jednostronnego ruchu i stabilizacji. Przysiad polega na wykonaniu ćwiczenia na jednej nodze, z drugą opartą z tyłu na podwyższeniu.', 'kobieta'),
(20, 'ok', 'obwodowo', 'Ściąganie drążka wyciągu do klatki.', '1) Weź wdech. Odchyl się nieznacznie, wypnij klatkę piersiową, zainicjuj ruch poprzez ściągnięcie łopatek w dół i do siebie, przyciągnij drążek w stronę górnej części klatki piersiowej, opuść łokcie wzdłuż tułowia w kierunku bioder. 2) W momencie największego napięcia zatrzymaj ruch na ułamek sekundy.', 'kobieta'),
(21, 'ok', 'obwodowo', 'Wyciskanie hantli na ławce skośnej.', 'Wyciskanie hantli leżąc na ławce skośnej dodatnio to znakomite ćwiczenie na klatkę piersiową. Dzięki temu ćwiczeniu zaangażujemy mięsień piersiowy większy, naramienny, a także triceps. Wyciskanie hantli leżąc na ławce skośnej dodatnio zdecydowanie polecamy mężczyznom na średnim stopniu zaawansowania.', 'kobieta'),
(22, 'ok', 'obwodowo', 'Unoszenie hantli bokiem.', 'Głowę ustaw w przedłużeniu kręgosłupa, cofnij brodę. Ramiona skierowane na zewnątrz – łokieć skierowany do tyłu. Weź głęboki wdech, napnij brzuch i cały czas napieraj mięśniami na ściany jamy brzusznej. Unieś ramiona bokiem, Twoje łokcie powinny znajdować się na wysokości barków.', 'kobieta'),
(23, 'ok', 'obwodowo', 'Unoszenie nóg w zwisie na drążku.', 'Unoszenie nóg w zwisie na drążku znakomicie rozwija funkcje dolnej części mięśni brzucha. Wykonanie zaczynamy od swobodnego zwisu na wyprostowanych ramionach ustawionych na szerokość barków lub nieco szerzej. Mocno napinamy mięśnie nóg i brzucha oraz wysuwamy biodra do przodu poprzez spięcie mięśni pośladkowych.', 'kobieta'),
(31, 'ok', 'regeneracyjnie', 'Stretching dynamiczny', 'polega na wykonywaniu dynamicznych ruchów, takich jak wymachy (np. ramion), wypady czy skręty (np. tułowia). Opcja ta nie uwzględnienia zatrzymania podczas rozciągnięcia. Stretching dynamiczny jest stosowany głównie przed treningiem, w celu rozgrzewki, a wykonywane ruchy angażują mięśnie, które będziemy ćwiczyć, lecz z mniejszą intensywnością.', 'kobieta'),
(32, 'ok', 'regeneracyjnie', 'Stretching statyczny ', 'to rozciągnięcie danego mięśnia i utrzymanie tego rozciągnięcia przez około 15-60 sekund. Po wykonanym powtórzeniu mięsień jest rozluźniany. Rozciągnięcie należy powtórzyć. Rozciąganie statyczne stosowane jest w celu uspokojenia i rozluźnienia mięśni', 'kobieta'),
(33, 'ok', 'regeneracyjnie', 'PIR (postisometric relaxation)', 'czyli poizometryczna relaksacja mięśni – to metoda rozciągania bazująca na antagonistycznym hamowaniu (zjawisku występującym w mięśniach). Umożliwia ona rozciągnięcie mięśnia oraz jego antagonisty, czyli mięśnia działającego przeciwnie.', 'kobieta'),
(34, 'ok', 'regeneracyjnie', 'Plywanie', 'Pływanie – metoda poruszania się po powierzchni wody lub w wodzie, wykorzystywana przez człowieka, zwierzęta oraz maszyny.\r\nJest popularną aktywnością rekreacyjną, szczególnie w krajach o cieplejszym klimacie i naturalnych zbiornikach wodnych. Istnieje wiele styli pływackich. Do najpopularniejszych należą żabka, kraul, grzbietowy, motylkowy. Wiele znanych i uznanych trenerów uważa, że do styli pływackich powinna się też zaliczać strzałka. Pływanie to też jedna z metod rehabilitacji, a także dyscyplina sportu.', 'kobieta'),
(35, 'ok', 'obwodowo', 'Rozciaganie', 'Rozciąganie osiowe – w wytrzymałości materiałów definiujemy dwa podstawowe przypadki rozciągania osiowego:\r\nRozciąganie czyste\r\nRozciąganie czyste pręta, w którym do ścianek poprzecznych jednorodnego i izotropowego pręta pryzmatycznego przyłożone jest obciążenie o stałej gęstości {displaystyle sigma }sigma  o zwrocie zgodnym z wektorem normalnym powierzchni ścianki poprzecznej (prostopadłym do ścianki, skierowanym na zewnątrz). Dla tego przypadku wytrzymałościowego znane jest rzeczywiste rozwiązanie zagadnienia brzegowego liniowej teorii sprężystości.\r\nRozciąganie proste pręta, które różni się od rozciągania „czystego” tym, że obciążenie zastępujemy dwójką przeciwnie skierowanych, równych co do wartości i współliniowych sił skupionych, działających w osi tego pręta.', 'kobieta'),
(40, 'ok', 'rekreacyjnie', 'Krążenia głową w prawo i lewo', 'stajemy wyprostowani, stopy rozstawione na szerokość bioder, ręce możemy swobodnie oprzeć na biodrach. Wykonujemy krążenia głowy od lewej do prawej – tylko z przodu! Pełnego krążenia nie zalecamy ponieważ nasz kręgosłup nie jest przystosowany do takich ćwiczeń (wyrostki kolczaste kręgów ograniczają ruch do tyłu!). Wykonujemy więc jedynie pół pełnego obrotu, przechylamy głowę w bok do ramienia, przodem przenosimy do drugiego ramienia i z powrotem tą samą drogą. 10 cykli w zupełności nam wystarczy.', 'kobieta'),
(41, 'ok', 'rekreacyjnie', 'krążenia ramion ', 'stopy ustawiamy szerzej niż w poprzednim ćwiczeniu, stoimy wyprostowani w swobodnej pozycji. Wykonujemy krążenia ramion naprzemianstronnie (jak w pływaniu kraulem) w przód lub w tył. Ważna uwaga: ruchy powinny być obszerne i musimy pamiętać, aby ramiona były wyprostowane w stawach łokciowych! 10-15 razy każdą z kończyn powinno wystarczyć.', 'kobieta'),
(42, 'ok', 'rekreacyjnie', 'krążenia bioder ', 'stopy ustawiamy na szerokość barków, dłonie opieramy na biodrach. Wykonujemy obszerne krążenia biodrami, do uczucia napięcia z każdej strony ciała. 5 pełnych krążeń w jedną i 5 w drugą stronę. Zwracamy uwagę, aby głowa stała w miejscu – wykonujemy ruchy jedynie biodrami!', 'kobieta'),
(43, 'ok', 'rekreacyjnie', 'krążenia tułowia  ', 'wracamy do szerszego ustawienia stóp (ok. 50 cm. przerwy między lewą, a prawą). Unosimy ramiona wysoko nad głowę i wykonujemy obszerne krążenia tułowia – jeśli nie zaniedbaliśmy swojej sylwetki to z przodu powinniśmy sięgać do ziemi, z tyłu odchylamy się tak aby poczuć napięcie w mięśniach brzucha. Wykonujemy minimum 5 powtórzeń w każdą stronę.', 'kobieta'),
(44, 'ok', 'rekreacyjnie', 'rozciąganie mięśni łydki ', 'zmieniamy pozycję nóg. Stajemy w wykroku, stopy ustawione równolegle do siebie. Tylna noga wyprostowana, przednia ugięta w kolanie. Tułów wyprostowany, pochylamy w przód do uczucia napięcia łydki nogi tylnej. Liczymy do 8-10 sekund i zmieniamy nogę. Dla ułatwienia możemy oprzeć się o drzewo. Wykonujemy 2-3 powtórzenia na każdą stronę.', 'kobieta'),
(45, 'ok', 'rekreacyjnie', 'rozciąganie ścięgna Achillesa ', 'ćwiczenie to wykonujemy analogicznie do poprzedniego z tą różnicą, że uginamy w kolanie również tylną nogę z tyłu.', 'kobieta'),
(46, 'ok', 'rekreacyjnie', 'rozciąganie mięśni dwugłowych uda ', 'stojąc na jednej nodze, unosimy drugą i przyciągamy udo do klatki piersiowej. Trzymamy 8-10 sekund, wykonujemy 2 powtórzenia na każdą nogę.\r\n\r\n', 'kobieta'),
(47, 'ok', 'kondycyjnie', 'Pajacyki / Pajace', 'Pajace zaliczamy do ćwiczeń kondycyjnych. Doskonałe ćwiczenie także do rozgrzewki, angażuje do pracy mięśnie całego ciała. Polecamy pajace kobietom na każdym stopniu zaawansowania.', 'kobieta'),
(48, 'ok', 'kondycyjnie', 'Przeskoki w podporze przodem', 'Przeskoki w podporze przodem to zdecydowanie ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Przeskoki w podporze przodem polecamy kobietom na każdym stopniu zaawansowania.', 'kobieta'),
(49, 'ok', 'kondycyjnie', 'Mountain climbers z rękami na podwyższeniu', 'Mountain climbers zaliczamy do ćwiczeń kondycyjnych. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej, ale równocześnie  wzmacniamy mięśnie core. Mountain climbers z rękami na podwyższeniu polecamy kobietom na każdym stopniu zaawansowania.', 'kobieta'),
(50, 'ok', 'kondycyjnie', 'Przysiad szeroko – wąsko z wyskokiem', 'Przysiad szeroko – wąsko z wyskokiem traktujemy bardziej jako ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na dolnych partiach ciała. Przysiad szeroko – wąsko z wyskokiem zdecydowanie polecamy kobietom średnio zaawansowanym.', 'kobieta'),
(51, 'ok', 'kondycyjnie', 'Burpee chodzony', 'Burpee chodzone to ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Ćwiczenie burpee chodzony idealnie nadaje się do rozgrzewki przed aktywnością fizyczną. Polecamy kobietom na każdym stopniu zaawansowania, a szczególnie poczatkującym.', 'kobieta'),
(52, 'ok', 'kondycyjnie', 'Burpee z wyskokiem', 'Burpee z wyskokiem to ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Burpee z wyskokiem idealnie nadaje się do rozgrzewki przed aktywnością fizyczną. Polecamy kobietom na wysokim stopniu zaawansowania.', 'kobieta'),
(53, 'ok', 'kondycyjnie', 'Skip C', 'Skip C to zdecydowanie ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Skip C idealnie nadaje się do rozgrzewki przed aktywnością fizyczną. Ćwiczenie skip C polecamy kobietom na każdym stopniu zaawansowania.', 'kobieta'),
(54, 'ok', 'kondycyjnie', 'Skip A', 'Skip A to zdecydowanie ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Skip A idealnie nadaje się do rozgrzewki przed aktywnością fizyczną. Ćwiczenie skip A polecamy kobietom na każdym stopniu zaawansowania.', 'kobieta');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mezczyzni`
--

CREATE TABLE `mezczyzni` (
  `mezczyznaID` int(11) NOT NULL,
  `status_bmi` tinytext DEFAULT NULL,
  `rodzaj_cwiczenia` tinytext DEFAULT NULL,
  `nazwa_cwiczenia` tinytext DEFAULT NULL,
  `opis_cwiczenia` text DEFAULT NULL,
  `plec` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `mezczyzni`
--

INSERT INTO `mezczyzni` (`mezczyznaID`, `status_bmi`, `rodzaj_cwiczenia`, `nazwa_cwiczenia`, `opis_cwiczenia`, `plec`) VALUES
(1, 'ok', 'obwodowo', 'Krazenia ramion', 'Zacznij powoli wykonywać małe koła w przód spokojnie przy tym oddychając. Ćwiczenie powinno trwać ok 10 sekund.', 'mezczyzna'),
(2, 'ok', 'obwodowo', 'Krazenia ramion', 'Zacznij powoli wykonywać małe koła w przód spokojnie przy tym oddychając. Ćwiczenie powinno trwać ok 10 sekund.', 'mezczyzna'),
(3, 'ok', 'silowo', 'Wioslowanie sztanga w opadzie', '1) Utrzymując prawidłową pozycję, wykonaj wdech, a następnie przyciągnij sztangę pionowo w górę, kierując ją w stronę mostka, jednocześnie maksymalnie zbliżając łopatki do kręgosłupa. 2) Zatrzymaj ruch na ułamek sekundy w momencie, kiedy sztanga znajdzie się blisko tułowia.', 'mezczyzna'),
(4, 'ok', 'regeneracyjnie', 'Rozciaganie', 'napiąć mięśnie lub grupę mięśni przez naciskanie jak największą siłą od 10–30 sekund (napięcie izometryczne), - rozluźnić mięśnie na 2–3 sekundy, - spokojnie rozciągać mięśnie i pozostać w tej pozycji maksymalnej tyle samo co przy napinaniu (10–30 sekund).', 'mezczyzna'),
(5, 'ok', 'kondycyjnie', 'Interwaly', 'Trening interwałowy polega na przeplataniu wysiłku o wysokiej intensywności, z wysiłkiem o intensywności niskiej. Dla przykładu interwałem będzie trening:\r\n1 minuta truchtu/30 sekund szybkiego biegu — powtarzamy 10 razy\r\nJednak interwały nie muszą składać się z biegania. Trening o różnej intensywności możemy włączyć praktycznie do każdej aktywności np. przy skakaniu na skakance, wykonywaniu burpees czy jeździe na rowerze.\r\nCo więcej, nie każdy interwał w danym treningu musi być taki sam. Można sobie długości poszczególnych odcinków i przerw modyfikować — w zależności od formy i stawianego celu.', 'mezczyzna'),
(6, 'ok', 'rekreacyjnie', 'Jazda na rowerku stacjonarnym', 'Treningi na rowerku stacjonarnym bardzo dobrze wpływają też na kształtowanie sylwetki i mięśni łydek, ud oraz pośladków. Efekty są jednak nie tylko wizualne. Interwałowe treningi na rowerku poprawiają wytrzymałość, kondycję i ogólną sprawność organizmu. Regularny wysiłek na rowerku zredukuje także ryzyko chorób serca.', 'mezczyzna'),
(7, 'ok', 'kondycyjnie', 'Wyskok z podciągnięciem nóg', 'Wyskok z podciągnięciem nóg traktujemy jako ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na dolnych partiach ciała, ale także mocno angażujemy mięśnie brzucha. Polecamy mężczyznom na wysokim stopniu zaawansowania.', 'mezczyzna'),
(8, 'ok', 'kondycyjnie', 'Wyskok', 'Wyskok traktujemy jako ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na dolnych partiach ciała. Polecamy mężczyznom na każdym stopniu zaawansowania.', 'mezczyzna'),
(9, 'ok', 'kondycyjnie', 'Wejście na podwyższenie z unoszeniem kolana', 'Wejście na podwyższenie z unoszeniem kolana traktujemy bardziej jako ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na dolnych partiach ciała. Polecamy mężczyznom na każdym stopniu zaawansowania.', 'mezczyzna'),
(10, 'ok', 'kondycyjnie', 'Skip C', 'Skip C to zdecydowanie ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Ćwiczenie skip C idealnie nadaje się do rozgrzewki przed aktywnością fizyczną. Polecamy mężczyznom na każdym stopniu zaawansowania.', 'mezczyzna'),
(11, 'ok', 'kondycyjnie', 'Skip A', 'Skip A to zdecydowanie ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na poprawie naszej kondycji fizycznej. Skip A idealnie nadaje się do rozgrzewki przed aktywnością fizyczną. Polecamy mężczyznom na każdym stopniu zaawansowania.', 'mezczyzna'),
(12, 'ok', 'kondycyjnie', 'Przysiad z wyskokiem na podwyższenie', 'Przysiad z wyskokiem na podwyższenie traktujemy bardziej jako ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na dolnych partiach ciała. Przysiad z wyskokiem na podwyższenie polecamy mężczyznom na średnim stopniu zaawansowania.', 'mezczyzna'),
(13, 'ok', 'kondycyjnie', 'Przysiad z wyskokiem', 'Przysiad z wyskokiem traktujemy bardziej jako ćwiczenie kondycyjne. Jest to ćwiczenie koncentrujące się w głównej mierze na dolnych partiach ciała. Przysiad z wyskokiem polecamy mężczyznom na średnim stopniu zaawansowania.', 'mezczyzna'),
(14, 'ok', 'kondycyjnie', 'Przeskoki w wykroku', 'Przeskoki w wykroku to utrudniona wersja standardowych wykroków. Ćwiczenie traktujemy bardziej jako kondycyjne. Doskonałe ćwiczenie do modelowania dolnych partii ciała. Przeskoki w wykroku polecamy mężczyznom na średnim stopniu zaawansowania.', 'mezczyzna'),
(15, 'ok', 'obwodowo', 'Przysiady ze sztangą', 'Przysiad ze sztangą z przodu (front squat) umożliwia unoszenie dużych ciężarów, dzięki czemu doskonale stymuluje rozwój mięśni nóg. Z kolei sumo squat, czyli przysiad z szerokim rozstawem nóg, wzmacnia przede wszystkim pośladki. Przysiad ze sztangą to niewątpliwie król ćwiczeń siłowych.', 'mezczyzna'),
(16, 'ok', 'obwodowo', 'Ściąganie drążka wyciągu do klatki piersiowej', 'Siadamy przodem do przyrządu, blokujemy uda o wałki i chwytamy szeroko drążek nachwytem. Bierzemy wdech, wypychając klatkę piersiową do przodu i spinając mięśnie grzbietu przyciągamy drążek do wysokości brody. W końcowej fazie ruchu wykonujemy wydech i staramy się utrzymać napięcie mięśni przez 1-2 sekundy.', 'mezczyzna'),
(17, 'ok', 'obwodowo', 'Wyciskanie sztangi na ławce poziomej', '1) Utrzymując prawidłową pozycję wyjściową, wykonaj wdech i powolnym ruchem opuść sztangę do środkowej części klatki piersiowej, uginając ramiona w łokciach. 2) Po przytrzymaniu sztangi w okolicach klatki przez ułamek sekundy zacznij unosić sztangę z powrotem do pozycji wyjściowej, wykonując wydech powietrza.', 'mezczyzna'),
(18, 'ok', 'obwodowo', 'Wyciskanie żołnierskie sztangi', 'Wyciskanie żołnierskie sztangi na stojąco. Sztangę trzymamy nachwytem, tj. palce muszą wskazywać przód. Odchylamy lekko głowę w tył i wypychamy sztangę w górę. Podczas przenoszenia ciężaru nad głowę należy pamiętać, by w finalnej pozycji sztanga znajdowała się centralnie nad głową.', 'mezczyzna'),
(19, 'ok', 'obwodowo', 'Wznosy boczne hantli', '1) Utrzymując prawidłową pozycję wyjściową, wykonaj wdech i wznieś hantle w bok, aż ramiona będą ustawione równolegle do podłogi. 2) Następnie dwukrotnie wolniej opuszczaj hantle, wykonuj przy tym wydech. 3) Wykonaj wyznaczoną liczbę powtórzeń.', 'mezczyzna'),
(20, 'ok', 'obwodowo', 'Unoszenie nóg w zwisie na drążku', 'Unoszenie nóg w zwisie na drążku znakomicie rozwija funkcje dolnej części mięśni brzucha. Wykonanie zaczynamy od swobodnego zwisu na wyprostowanych ramionach ustawionych na szerokość barków lub nieco szerzej. Mocno napinamy mięśnie nóg i brzucha oraz wysuwamy biodra do przodu poprzez spięcie mięśni pośladkowych.', 'mezczyzna'),
(21, 'ok', 'silowo', 'pompki', 'Pompka (właśc.: uginanie i prostowanie ramion w podporze przodem) – popularna nazwa ćwiczenia fizycznego wykonywanego w pozycji poziomej, twarzą do ziemi, polegającego na podnoszeniu i obniżaniu tułowia.', 'mezczyzna'),
(22, 'ok', 'silowo', 'Deska na łokciach', 'Plank – jak prawidłowo wykonać deskę? Wystarczy z pozycji leżącej podnieść ciężar ciała na przedramionach, trzymając łokcie równo pod barkami i opierając wyprostowane ciało na palcach stóp przy jednoczesnym napięciu wszystkich mięśni. Nazwa plank zrodziła się z porównania ułożenia ciała do nieruchomej deski.', 'mezczyzna'),
(23, 'ok', 'silowo', 'Odwrócona pompka', 'Weź głęboki wdech, napnij brzuch i cały czas napieraj mięśniami na ściany jamy brzusznej. Wykonaj zgięcie w stawie łokciowym, opuszczając ciało. Trzymaj przedramiona w pionie, tułów prowadź blisko oparcia. Opuszczaj się w dół do momentu, kiedy Twoje ramiona będą znajdowały się w pozycji równoległej do podłoża.', 'mezczyzna'),
(24, 'ok', 'silowo', 'Podchodzenie rękami do nóg, z deski w podporze na dłoniach', 'Pozycja wyjściowa\r\n\r\n1) Podpór przodem na przedramionach, łokcie pod barkami, nogi złączone, wyprostowane, ustawione w jednej linii z tułowiem – równolegle do podłoża.\r\n2) Zachowaj naturalną krzywiznę kręgosłupa.\r\n3) Pozycję utrzymuj do momentu, w którym jesteś w stanie kontrolować ustawienie ciała.\r\n.                                                                          \r\n1) Utrzymując prawidłową pozycję wyjściową, weź wdech i przejdź z podporu na przedramionach do podporu przodem, a następnie wróć do podporu na przedramionach, wykonując wydech.\r\n2) Ruch wstawania wykonuj na zmianę, rozpoczynając prawą, a następnie lewą ręką.', 'mezczyzna'),
(25, 'ok', 'regeneracyjnie', 'Pływanie/aqua jogging', 'poprawia przepływ krwi w mięśniach. Ciśnienie wody dodatkowo potęguje ten efekt. Spokojne zajęcia w wodzie rozluźniają, przez co zmniejsza się sztywność mięśni, a woda odciąża stawy. Dodatkowym atutem jest wszechstronność ruchu i jego oddziaływanie na ramiona, korpus i nogi;', 'mezczyzna'),
(26, 'ok', 'regeneracyjnie', 'Orbitrek', 'najbardziej przypomina bieg (poza aqua joggingiem). Ruch na orbitreku dobrze imituje bieganie, wpływa na najbardziej obciążane partie nóg eliminując jednocześnie nacisk na stawy oraz drżenie mięśni wywoływane uderzeniem stóp o podłoże. Ta forma treningu regeneracyjnego polecana jest głownie osobom, które wychodzą lub dopiero wyszły z kontuzji, odczuwają bóle przeciążeniowe lub są zagrożone schorzeniami stawów;', 'mezczyzna'),
(27, 'ok', 'regeneracyjnie', 'Jazda na rowerze', 'może okazać się pomocna w dotlenieniu mięśni czworogłowych ud. Jeśli uda po podbiegach lub zbiegach są obolałe, spokojna jazda rowerem może przyspieszyć ich powrót do sprawności;', 'mezczyzna'),
(28, 'ok', 'regeneracyjnie', 'Narty biegowe', 'w stylu klasycznym, podobnie jak orbitrek, dobrze imitują bieganie przy jednoczesnej minimalizacji wstrząsów.', 'mezczyzna'),
(29, 'ok', 'rekreacyjnie', 'bieg i chód kondycyjny', 'Trenować można na świeżym powietrzu albo na hali – ważne jest, aby trenować na płaskim podłożu. Nie trzeba mieć do tego kijków trekkingowych – chodziarstwo to nie nordic walking. Po przybraniu odpowiedniej, wyprostowanej pozycji zaczynamy chodzić z prędkością ok. 6 km/h (chód sportowy dla amatorów). Pamiętajmy o ruchu wahadłowym rąk, które mają być zgięte w łokciach pod kątem 90 stopni. Dłonie mają być zwinięte, ale nie zaciśnięte. Trening rozpoczynamy od 10 minut rozgrzewki całego ciała, a następnie uprawiamy chód sportowy przez ok. godzinę, aby zakończyć go rozgrzewką lub relaksującym, zwykłym spacerem. Tak wygląda podstawowa wersja treningu dla osób, które po prostu chcą zacząć uprawiać chód sportowy jako aktywność fizyczną dla własnej przyjemności.', 'mezczyzna'),
(30, 'ok', 'rekreacyjnie', 'sporty indywidualne i zespołowe', 'Sport to dla wielu osób nieodłączny element stylu życia, a moda na aktywność fizyczną sprawia, że amatorów ruchu wciąż przybywa. Dlaczego? Sport to świetny przepis na piękną figurę, naturalne antidotum na wiele dolegliwości zdrowotnych, a także gwarancja doskonałego samopoczucia. Podczas wysiłku fizycznego organizm wydziela endorfiny – to właśnie dzięki nim czujemy się błogo i cudownie – nawet po najcięższym treningu. Sport to nie tylko trening ciała, ale także charakteru – wykształca w nas systematyczność i poczucie obowiązku. Nie zapominajmy też, że każda aktywność fizyczna powinna sprawiać nam frajdę. Dlatego też warto zastanowić się nad rodzajem sportu , który będzie dla nas przyjemnością, a nie przykrym obowiązkiem.', 'mezczyzna'),
(31, 'ok', 'rekreacyjnie', 'sporty wodne', 'Sporty wodne nie tylko latem zapewniają nam upragnioną ochłodę. Przy odpowiednim ubraniu i wyposażeniu, możesz uprawiać je cały rok. Dzięki temu będziesz cieszyła się z korzyści zdrowotnych jakie dają przez cały czas. Wzajemny respekt i trzymanie się ustalonych reguł, ułatwia uprawiającym sporty wodne, pływakom i amatorom pływania na łódkach, cieszenie się czasem spędzonym w wodzie. Tutaj dowiesz się o najważniejszych zasadach i regułach, których powinnaś przestrzegać oraz jaki pożytek dla zdrowia przynosi uprawianie sportów wodnych.', 'mezczyzna'),
(32, 'ok', 'rekreacyjnie', 'lekkoatletykę (biegi, skoki, rzuty)', 'Lekkoatletyka jest świetnym sposobem, aby zachęcić dziecko do kontaktu ze sportem i regularnych ćwiczeń. W późniejszym czasie, nawet jeśli przestanie brać udział w zawodach, będzie doceniało pozytywny wpływ sportu na swój organizm.', 'mezczyzna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `imie` tinytext DEFAULT NULL,
  `nazwisko` tinytext DEFAULT NULL,
  `login` tinytext DEFAULT NULL,
  `haslo` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userID`, `imie`, `nazwisko`, `login`, `haslo`, `email`) VALUES
(6, 'Patryk', 'Górka', 'sosikzkw', '$2y$10$z5wspad7LXvY80s78p7/M.qjmGobt3DsQvnmJpueWWEAbtAf5H2/m', 'pgorka@gmail.com'),
(7, 'Anna', 'Ligeza', 'annaligeza', '$2y$10$uriyX1s7tOi7R4mM8MASq.vdFKkDpx38JLXtXi3cy8z/76tnwC7tO', 'ANNA@gmail.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapytania`
--

CREATE TABLE `zapytania` (
  `zapytanieID` int(11) NOT NULL,
  `imie` tinytext DEFAULT NULL,
  `nazwisko` tinytext DEFAULT NULL,
  `temat` tinytext DEFAULT NULL,
  `opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zapytania`
--

INSERT INTO `zapytania` (`zapytanieID`, `imie`, `nazwisko`, `temat`, `opis`) VALUES
(4, 'Patryk', 'Gorka', 'Problem', 'Mam problem. Jestem Szcuply i nie wiem jak zaczac wykonywanie cwiczen. licze na panska pomoc.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`dietaID`);

--
-- Indeksy dla tabeli `informacje_o_uzytkowniku`
--
ALTER TABLE `informacje_o_uzytkowniku`
  ADD PRIMARY KEY (`infoID`);

--
-- Indeksy dla tabeli `kobiety`
--
ALTER TABLE `kobiety`
  ADD PRIMARY KEY (`kobietaID`);

--
-- Indeksy dla tabeli `mezczyzni`
--
ALTER TABLE `mezczyzni`
  ADD PRIMARY KEY (`mezczyznaID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indeksy dla tabeli `zapytania`
--
ALTER TABLE `zapytania`
  ADD PRIMARY KEY (`zapytanieID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dieta`
--
ALTER TABLE `dieta`
  MODIFY `dietaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `informacje_o_uzytkowniku`
--
ALTER TABLE `informacje_o_uzytkowniku`
  MODIFY `infoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT dla tabeli `kobiety`
--
ALTER TABLE `kobiety`
  MODIFY `kobietaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT dla tabeli `mezczyzni`
--
ALTER TABLE `mezczyzni`
  MODIFY `mezczyznaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `zapytania`
--
ALTER TABLE `zapytania`
  MODIFY `zapytanieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
