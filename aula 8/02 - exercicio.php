<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <form action="02 - parte2.php" method="get">
        <?php
            $c = 1;
            while ($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'><br>"; 
                $c++;
            }   
        ?>
        <input type="submit" value="Enviar">
    </form>

</div>
</body>
</html>

