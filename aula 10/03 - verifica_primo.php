<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;

        $primo = 1;
        echo "Valores múltiplos de $n: 1 ";
        for ($i=2; $i <= $n ; $i++) { 
            if($n % $i == 0){
                $primo++;
                echo "$i ";
                
            }
        }
        echo "<br>Total de primos: $primo";

        if ($primo == 2) {
             echo "<br> $n é primo";
        }else {
            echo "<br> $n  não é primo";
        }
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>

