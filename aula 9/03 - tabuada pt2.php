<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        $c = 1;
        echo "<h2>Mostrando a Tabuada de  $n:</h2>";
        
        do {
            echo "$n x $c = ".$n*$c."<br>";
            $c++;
        } while ($c <= 10);
    ?>
    <br><a href="./03 - tabuada.php">Voltar</a>
</body>
</html>

