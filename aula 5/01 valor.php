<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz quadrada do valor  $valor é ".number_format($rq,2);
    ?>
</body>
</html>

