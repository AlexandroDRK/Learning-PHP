<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <h2>Exercício usando operador ternário</h2>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores recebidos foram: $n1 e $n2<br/>";
        $r = ($tipo == "s")? $n1 + $n2 : $n1 * $n2;
        echo "O resultado será: $r";
    ?>
</body>
</html>

