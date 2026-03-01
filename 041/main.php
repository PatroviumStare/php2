<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require('albums.php');
require('tracks.php');

$tracksarray = [];

foreach ($tracks as $track) {
    $tracksarray[$track['id_album']][] = $track;
}

if (isset($_GET['id_album'])) {
    $albumid = $_GET['id_album'];
    echo "<h2>Искомый альбом</h2>";
    
    foreach ($albums as $album) {
        if ($album['id_album'] == $albumid) {
            echo '<h3>' . $album["title"] . ' (' . $album['country'] . ')</h3>';
            echo '<ul>';
        if (isset($tracksarray[$album['id_album']])) {
            foreach ($tracksarray[$album['id_album']] as $track) {
                echo "<li>" . $track['name'] . "</li>";
            }
} else {
    echo "<li>треков нет</li>";
}
    echo '</ul>';
}
}
}
?>
    
</body>
</html>


 