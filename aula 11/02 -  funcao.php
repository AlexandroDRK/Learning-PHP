<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        function soma($a, $b){
            $s = $a + $b;
            return $s;
        }

        $x = 3;
        $y = 4;
        $r = soma($x,$y);
        echo "<p>A soma entre $x e $y é igual a $r</p>";
    ?>
</body>
</html>

