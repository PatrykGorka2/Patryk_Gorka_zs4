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
        <button type="submit">ZMIANA</button>
    </form>
    <?php
    if(isset($_POST)){
        $str = $_POST['t1'];

        $str = strtoupper($str);

        echo $str;
    }
    ?>
    
</body>
</html>
