<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Треки альбома Back in Black (AC/DC):</h2>
    <ul>
    <?php
        include ("tracks.php");
        foreach ($track as $key => $value) {
            if ($value['id_album'] == '6') {
                echo "<li>",$value['name'],"</li><br>";
        }
        }
    ?>
    </ul>
</body>
</html>