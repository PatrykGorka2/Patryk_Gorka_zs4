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
        <input type="number" name="liczba3" placeholder="Podaj trzecia liczbe">
        <input type="submit" value="Oblicz">
    </form>
    <?php

function liczby_pitagorejskie($a, $b, $c){
    if($a*$a + $b*$b == $c*$c and $a>0 and $b>0 and $c>0){
        echo 'Liczby sa pitagorejskie';

    }

    else{
        echo 'Liczby nie sa pitagorejskie';
    }
}
    if(isset($_POST['liczba1'])){
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];
        $l3 = $_POST['liczba3'];

        echo liczby_pitagorejskie($l1, $l2 ,$l3);
    }
    ?>
</body>
</html>
