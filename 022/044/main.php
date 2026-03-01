<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $first = random_int(1,6);
        $second = random_int(1,6);
        $third = random_int(1,6);
        $result = $first+$second+$third;
        echo "<h1>", $result, "</h1><br>";
    ?>
    <img src="cube/<?php echo $first; ?>.jpg" alt="">
    <img src="cube/<?php echo $second; ?>.jpg" alt="">
    <img src="cube/<?php echo $third; ?>.jpg" alt="">

</body>
</html>