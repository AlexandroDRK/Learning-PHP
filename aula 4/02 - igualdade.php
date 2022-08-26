<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <h2>Exercício usando operador ternário</h2>
    <?php
        $n1 = 10;
        $n2 = "10";
        echo "Os valores recebidos foram: $n1 e $n2<br/>";
        $r = ($n1 == $n2)? "SIM" : "NÃO";
        echo "As variáveis A e B são iguais ?: $r<br/>";
        $r1 = ($n1 === $n2)? "SIM" : "NÃO";
        echo "As variáveis A e B são idênticas ?: $r1";
    ?>
</body>
</html>

