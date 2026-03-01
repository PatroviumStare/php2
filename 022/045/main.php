<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $count = 5;
        $array = array();
       for ($i = 0; $i < $count; $i++) {
            $array[] = rand(1,6);
       }
       $result = array_sum($array);
        echo "<h1>", $result, "</h1><br>";
        foreach ($array as $key => $value) {
            echo "<img src='cube/$value.jpg' alt='' style='width: auto; margin: 10px;'>";
        }
    ?>

</body>
</html>