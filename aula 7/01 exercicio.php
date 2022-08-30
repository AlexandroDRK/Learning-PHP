<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            
            case 2:
                $r = pow($n,3);
                break;
            
            case 3:
                $r = sqrt($n);
                break;  
        }

        echo "A operacão solicitada foi <span class='foco'>$r</span><br>"; 
    ?>
<a href="01 - exercicio.html">Voltar</a>
</body>
</html>

