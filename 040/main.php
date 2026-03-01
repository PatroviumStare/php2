<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require ('albums.php');
        require ('tracks.php');
        $tracklist = [];

        foreach ($tracks as $track) {
            $tracklist[$track['id_album']][] = $track;    
        }

        echo "<ol>";
        foreach ($albums as $album) {
            echo "<li>{$album['title']} ({$album['country']})<ul>";
            if(isset($tracklist[$album['id_album']])) {
                foreach ($tracklist[$album['id_album']] as $track) {
                    echo "<li>{$track['name']}</li>";
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