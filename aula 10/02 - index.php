<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <form action="./02 - tabuada.php" method="get">
        Número: <select name="num">
        <?php
            for($c = 1;$c <=10 ; $c++){
                echo "<option value='$c'>$c</option>";
            }  
        ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>

</body>
</html>

