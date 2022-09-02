<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
    <h2>Exercício de desconto usando operadores de atribuição:</h2>
    <?php
        $preco = 200;
        echo "O Preço do produto é de R$: ".number_format($preco,2,",");
        $preco  *= 0.9;
        echo "</br>O Preço com 10% de desconto é R$: ".number_format($preco,2,",");
    ?>
</body>
</html>
