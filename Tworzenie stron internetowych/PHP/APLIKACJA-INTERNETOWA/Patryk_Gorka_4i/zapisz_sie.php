<?php
session_start();

//zabezpieczenie aby niezalogowany uzytkownik nie miał dostępu do serwisu
if(!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] == false){
    header('Location: loguj.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleee.css">
    <title>Zapisz sie</title>
</head>
<body>
<div class="header">
        <div class="cala_gora_div1">
            <div class="cala_gora_div1_1"><p>Twoja kariera właśnie zaczyna się od zera...</p></div>
            <div class="cala_gora_div1_2"><a href="#">WYBIERZ JĘZYK</a></div>
            <div class="cala_gora_div1_3"><a href="zapisz_sie.php" target="_blank">ZAPISZ SIĘ</a></div>
            <link rel="stylesheet" href="styleee.css">
        </div>
        <div class="nav">
            <div class="div1">
                <img src="focus.png" alt="" class="img_logo">
            </div>
            <div class="div2">
            <nav>
                <div class="naapisek">
            <ol>
            <li><a href="index.php">MENU</a>
                <ul>
                    <li><a href="kontakt.php">KONTAKT</a></li>
                    <li><a href="aktualnosci.php">AKTUALNOŚCI</a>
                        <ul>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="wpisy.php">WPISY</a></li>
                        </ul>
                    </li>
                    <li><a href="zapisz_sie.php">ZAPISZ SIE</a></li>
                </ul>
            </li>
            </ol>
</div>
            <div class="napisek"><i>Najważniejsze to dążyć do wyznaczonego celu...</i></div>
            </nav>
            </div>
            </div>
    </div>

    <div class="przycisk">
    <h3 class="h3_gora">Zalogowano: <?php echo $_SESSION['login_uzytkownika']; ?></h3>
<button class="button_gora"><a href="wyloguj.php">WYLOGUJ</a></button>
<button class="button_gora1"><a href="zapisz_sie.php">GORA</a></button>
</div>



</body>
</html>