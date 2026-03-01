<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require ('dump/albums.php');
        require ('dump/tracks.php');

        $tracksarray=[];
        
        foreach ($tracks as $track) {
            $tracksarray[$track['id_album']][] = $track;
        }

if (isset($_GET['id_album'])) {
    $albumid = $_GET['id_album'];
} else {
    $albumid = null;
}

echo "<ol>";
foreach ($albums as $album) {

if ($albumid != null) {
        continue;
    }

    echo '<li>', $album["title"], ' (', $album['country'], ')<ul>';
    if (isset($tracksarray[$album['id_album']])) {
        foreach ($tracksarray[$album['id_album']] as $track) {
            echo "<li>" . $track['name'] . "</li>";
        }
    } else {
        echo "<li>нет треков</li>";
    }
    echo "</ul></li>";
}


echo "</ol>";
    ?>
</body>
</html>