<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <h2>Exercício usando operador ternário</h2>
    <?php
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu no ano $ano tem idade de $idade anos. ";
        $tipo = ($idade >= 18 && $idade < 70)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "E dessa forma seu voto é $tipo.";
    ?>
</body>
</html>

