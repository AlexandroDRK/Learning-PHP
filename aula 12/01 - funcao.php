<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>

<body>
<div>
    <?php
        function teste(&$x){
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }

        $a =3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</div> 
</body>
</html>

