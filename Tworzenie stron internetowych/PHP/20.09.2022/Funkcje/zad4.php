<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="sel">
            <option value=1>Dodawanie</option>
            <option value=2>Odejmowanie</option>
            <option value=3>Mnozenie</option>
            <option value=4>Dzielenie</option>
        </select>
        <input type="number" name="liczba1" placeholder="Podaj pierwsza liczbe">
        <input type="number" name="liczba2" placeholder="Podaj druga liczbe">        <input type="submit" value="Oblicz">
    </form>
    <?php

    function suma($a, $b){
        return $a + $b;
    }

    function roznica($a, $b){
        return $a - $b;
    }

    function dzielenie($a, $b){
        return $a / $b;
    }

    function mnozenie($a, $b){
        return $a * $b;
    }




    if(isset($_POST['liczba1'])){
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];
        $sel = $_POST['sel'];

        switch($sel){
            case 1:
                echo ' Wynik z dodawania to: <br>';
                echo suma($l1, $l2);
                break;

                case 2:
                    echo ' Wynik z odejmowania to: <br>';
                    echo roznica($l1, $l2);
                    break;

                    case 3:
                        echo ' Wynik z mnozenia to: <br>';
                        echo mnozenie($l1, $l2);
                        break;

                        case 4:
                            echo ' Wynik z dzielenia to: <br>';
                            echo dzielenie($l1, $l2);
                            break;
        }
        }
    ?>
</body>
</html>
