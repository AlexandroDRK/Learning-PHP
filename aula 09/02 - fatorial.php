<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
         echo "<h2>Calculando o fatorial de $v:</h2>";
        
         $c = $v;
         $fat = 1;
         do {
            $fat *= $c;
            $c--;
         } while ($c > 1);

         echo "<h3>$v! = $fat:</h3>";
    ?>
    <a href="02 - index.html">Voltar</a>
</body>
</html>

