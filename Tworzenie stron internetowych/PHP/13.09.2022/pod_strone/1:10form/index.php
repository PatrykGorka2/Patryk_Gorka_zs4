<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testowa</title>
</head>
<body>
    <form method="post" action="">
        <label for="">
        <input type="text" name="imie" placeholder="Podaj imie">
        </label>
        <label for="">
        <input type="text" name="nazwisko" placeholder="Podaj nazwisko">
        </label>
        <label for=""></label>
        <input type="number" name="wiek" placeholder="Podaj wiek">
        </label>
        <label for="">
        <input type="number" name="numer" placeholder="Podaj numer telefonu">
        </label>
        <label>
        <input type="date" name="data_ur" placeholder="Podaj date urodzenia">
        </label>
        <label>
        <input type="number" name="rokur" placeholder="Podaj rok urodzenia">
        </label>

 <input type="submit" name="button">
    </form>

    <?php
    if(isset($_POST['imie'])){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $data_ur = $_POST['data_ur'];
        $wiek = $_POST['wiek'];
        $a = $_POST['rokur'];


        $teraz = new DateTime;
    echo $teraz->format('Y-m-d');
    echo '<br>';
    $koniec = new DateTime(date($data_ur));
    echo $koniec->format('Y-m-d');
    $roznica = $teraz -> diff($koniec);
    echo '<br>';
    echo $roznica->format('Masz: %Y lat %M miesięcy i %D dni');
    
    $teraz2 = 2022;
    $roznica2 = $teraz2 = $a;

    if($roznica2<18){
        echo '<br>';
        echo 'Nie mozna wejsc';
    }else{
        echo '<br>';
        echo 'Mozna wejsc';
    }
        $numer = $_POST['numer'];
        $button = $_POST['button'];
    }
    ?>
</body>
</html>
