<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <h2>Exercício usando operador ternário</h2>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2)/2;
        echo "A média entre $nota1 e $nota2 é $media<br/>";
        $r = ($media < 6)?"REPROVADO":"APROVADO";
        echo "A situacão do aluno é $r";
    ?>
</body>
</html>

