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
        <input type="number" name="liczba1" placeholder="Podaj pierwsza liczbe">
        <input type="number" name="liczba2" placeholder="Podaj druga liczbe">
        <input type="submit" value="Oblicz">
    </form>
    <?php

    if(isset($_POST['liczba1'])){
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];
    }

    function suma($a, $b){
        $wynik = $a + $b;
        echo $wynik;

    }

    echo suma($l1, $l2);

    ?>
</body>
</html>
