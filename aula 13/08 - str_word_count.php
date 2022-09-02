<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <?php
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase,0);
        echo $cont;
        //usando o parametro  1 na função str_word_count , é retornado um vetor com cada palavra da string:
        $cont = str_word_count($frase,1);
        echo "<br>";
        print_r($cont);
        //usando o parametro  2 na função str_word_count , é retornado um vetor mantendo o psicionamento de cada palavra na string:
        $cont = str_word_count($frase,2);
        echo "<br>";
        print_r($cont);
    ?>
</div>  
</body>
</html>


