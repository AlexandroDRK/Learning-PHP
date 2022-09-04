<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <pre>
    <?php
        $v = array("A","J","M","X","K");
        print_r($v);
        echo "<br>";
        //ordenação reversa:
        rsort($v);
        print_r($v);
        echo "<br>";
        //ordenação mantendo o índice:
        asort($v);
        print_r($v);
    ?>
    </pre>
</div>  
</body>
</html>

