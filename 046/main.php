<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        $D = pow($b,2)-4*$a*$c;
        if ($D>0) {
            $x1 = (-$b + sqrt($D)) /2*$a;
            $x2 = (-$b - sqrt($D)) /2*$a;
            echo 'x1= ', $x1,'<br>x2= ', $x2;
        } elseif ($D < 0) {
            echo "Корней нет";
        } else {
            $x = -$b/2*$a;
            echo 'x= ', $x;
        }




    ?>
</body>
</html>