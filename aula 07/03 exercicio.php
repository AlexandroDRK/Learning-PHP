<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <?php
        $est = isset($_GET["est"])?$_GET["est"]:"Piauí";
        switch ($est){
            case 1:
                echo " Você mora na Região Norte";
                break;
            case 2:
                echo "Você mora na Região Nordeste";
                break;
            case 3:
                echo " Você mora na Região Centro-Oeste";
                break;
            case 4:
                echo"Você mora na Região Sudeste";
                break;
            case 5:
                echo "Você mora na Região Sul";
    
        }
    ?>
    <br><a href="03 - exercicio.html">Voltar</a>
</body>
</html>

