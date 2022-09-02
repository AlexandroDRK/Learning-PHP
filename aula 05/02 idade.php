<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Nome desconhecido]";
    $ano = isset($_GET["ano"])? $_GET["ano"]:0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
    $idade = date("Y") - $ano;
    echo "$nome é $sexo possui $idade anos.";
    ?>
    <a href="02 - exercicio.html">Voltar</a>
</body>
</html>

