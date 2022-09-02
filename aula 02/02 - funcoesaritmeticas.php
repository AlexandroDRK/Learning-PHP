<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        // atribuicao onde a função get recebe os valores passados nas variáveis da url:
        $a = $_GET["a1"];
        $b =  $_GET["b1"];
        
        echo "<h2> Valores recebidos: $a e $b</h2>";
        echo "Valor absoluto de $b e: ".abs($b);
        echo "</br> O valor de $a<sup>$b</sup> é: ".pow($a, $b);
        echo "</br>A raiz quadrada de $a é: ".sqrt($a);
        echo "</br>O valor arredondado de $b é: ".round($b); //ceil floor
        echo "</br>O valor inteiro de $b é: ".intval($b);
        echo "</br>O valor inteiro de $b em moeda é R$: ".number_format($b,2,",");
    ?>
</body>
</html>