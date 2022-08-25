<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <h2>Exercício usando variaveis de referência:</h2>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale: $a";
        echo "</br>A variavel B vale: $b";
    ?>
</body>
</html>