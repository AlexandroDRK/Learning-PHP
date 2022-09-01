<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        echo "<h2>Mostrando a Tabuada de  $n:</h2>";
        for ($i=1; $i < 10; $i++) { 
            echo "$n x $i = ".$n*$i."<br>";
        }
    ?>
    <br><a href="./02 - index.php">Voltar</a>
</body>
</html>

