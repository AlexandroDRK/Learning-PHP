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
    if ($i >= 18) {
        $v = "já pode votar";
        $d = "já pode dirigir";
    }else {
        $v = "não pode votar";
        $d = "não pode dirigir";
    }
    echo "Você pode $v e também $d";
    ?>
</body>
</html>

