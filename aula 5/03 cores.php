<!DOCTYPE html>
<html>
<head>
    <?php
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto genérico";
    $tam = isset($_GET["tam"])? $_GET["tam"]:"14pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8"/>
    <title></title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>
    <?php
    echo "<span class='texto'>$txt</span><br/>";
    ?>
    <br/><a href="03 - exercicio.html">Voltar</a>
</body>
</html>

