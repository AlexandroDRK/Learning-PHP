<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <form action="./03 - tabuada pt2.php" method="get">
        Número: <select name="num">
        <?php
            $c = 1;
            while($c <=10){
                echo "<option value='$c'>$c</option>";
                $c++;
            }
            
        ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>

</body>
</html>

