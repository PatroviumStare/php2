<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; margin-top: 10%;">
    <?php
        $first = rand(1,6);
        $second = rand(1,6);
        $third = rand(1,6);
        $result = $first+ $second+ $third;
        echo "<h1 style='font-size: 5rem;'>",$result, "</h1><br style='margin-bottom: 5%;'>";
        echo "<img src='$first.jpg' alt=''>";
        echo "<img src='$second.jpg' alt=''>";
        echo "<img src='$third.jpg' alt=''>";
    ?>
</body>
</html>