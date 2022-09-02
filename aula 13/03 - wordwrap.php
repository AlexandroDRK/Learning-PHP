<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da funcão wordwrap";
        $r = wordwrap($t,20,"<br/> \n");
        echo $r;
    ?>
</div>  
</body>
</html>

