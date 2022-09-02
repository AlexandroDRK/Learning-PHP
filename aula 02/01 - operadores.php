<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $a = 10;
        $b = 5;
        echo "<h2> Valores recebidos: $a e $b</h2>";
        echo "Soma: ".($a + $b);
        echo "</br>Subtração: ".($a - $b);
        echo "</br>Multiplicação: ".($a * $b);
        echo "</br>Divisão: ".($a / $b);
        echo "</br>Módulo da divisão: ".($a % $b);
        echo "</br>Média: ".(($a + $b)/2);
    ?>
</body>
</html>