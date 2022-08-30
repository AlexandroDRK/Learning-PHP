<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $ini = isset($_GET["ini"]) ? $_GET["ini"] : 0;
        $fim = isset($_GET["fim"]) ? $_GET["fim"] : 0;
        $inc = isset($_GET["inc"]) ? $_GET["inc"] : 0;

        if ($ini<=$fim) {
            $c = $ini;
            while ($c <= $fim) {
                echo "$c ";
                $c += $inc;
            }
        }else{
            $c = $ini;
            while ($c >= $fim) {
                echo "$c ";
                $c -= $inc;
            }
        }
    ?>
    <br><a href="03 - exercicio.html">Voltar</a>
</body>
</html>

