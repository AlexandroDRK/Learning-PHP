<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
    $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : "0";
    $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : "0";
    $media = ($n1 + $n2) / 2;
    echo "a média entre $n1 e $n2 é $media<br>";

    if ($media >= 7) {
        $situacao = "Aprovado";
    }else if($media >= 5 && $i < 7){
        $situacao = "Recuperação";
    }else {
        $situacao = "Reprovado";
    }
    echo "Situação do aluno: $situacao";
    ?>
</body>
</html>

