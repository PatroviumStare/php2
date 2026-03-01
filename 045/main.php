<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; margin-top: 10%;">
    <?php
        $count = 5;
        $cubes = array();
        for ($i=0; $i<$count; $i++) {
            $cubes[] = rand(1,6);
        }    
        $result = array_sum($cubes);
        echo "<h1 style='font-size: 5rem;'>",$result, "</h1><br style='margin-bottom: 5%;'>";
        foreach ($cubes as $value) {
            echo "<img src='$value.jpg' alt='' style='width: 100px; margin: 10px;'>";
        }
    ?>
</body>
</html>