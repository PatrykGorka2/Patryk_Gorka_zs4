<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="t1" placeholder="TEXT">
        <input type="text" name="wyraz" placeholder="wyraz">

        <button type="submit">OBLICZANIE</button>
    </form>
    <?php
    if(isset($_POST['t1']) and isset($_POST['wyraz'])){
        $str = trim($_POST['t1']);
        $str1 = trim($_POST['wyraz']);
        $oblicz = 0;
        $offset = 0;
        
        while(gettype(strpos($str, $str1, $offset))== "integer"){
            $oblicz++;
            $offset = strpos($str, $str1, $offset) +1;
        }
        echo $oblicz;
    }
    ?>
    
</body>
</html>
