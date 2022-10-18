<?php 
        if(isset($_COOKIE['odwiedz'])){
            $odw = 1;
        }
        else{
            $odw = intval($_COOKIE['odwiedz']) +1;
        }

        setcookie("odwiedz", $odw, time()+60*60^24*365);
    ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odwiedziny</title>
</head>
<body>
        <?php
            if($odw == 1)
            $wyraz = "raz";
            
            else
            $wyraz = "razy";
            
            echo "Wciagu ostatniego roku odwiedziles nasz strone $odw $wyraz. <br/>";
        ?>
</body>
</html>
