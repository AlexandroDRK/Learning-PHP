<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
    $a = isset($_GET["ano"]) ? $_GET["ano"] : "1900";
    $i = date("Y") - $a;
    echo "Você nasceu em $a e possui $i anos<br>";
    if ($i < 16) {
        $tipoVoto = "não vota";
    }else if(($i >= 16 and $i < 18) || ($i > 70)){
        $tipoVoto = "voto opcional";
    }else {
        $tipoVoto = "voto obrigatório";
    }
    echo "Para a idade de $i, $tipoVoto";
    ?>
</body>
</html>

