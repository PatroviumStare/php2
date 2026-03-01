<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("tracks.php");            
    ?>
    <div class="group">
    <ul>
    <?php
        $i = 0;
        do {
            echo '<li><b>(', $track[$i]['id_track'], ')</b> ', $track[$i]['name'], '</li><br>';
            $i++;
        } while ($i < 56)
    ?>
    </ul>
    </div>
    <div class="group">
    <ol>
    <?php
        for ($i=0; $i<56; $i++) {
            echo '<li><b>(', $track[$i]['id_track'], ')</b> ', $track[$i]['name'], '</li><br>';
        }
    ?>
    </ol>
    </div>
    <div class="group">
        <table border = 1px>
            <tr>
                <th>Id трека</th>
                <th>Название</th>
                <th>Примечание</th>
                <th>Id альбома</th>
            </tr>
            <?php
                foreach ($track as $key => $value) {
                    echo '<tr><th>', $track[$key]['id_track'],'</th><th>', $track[$key]['name'], '</th><th>', $track[$key]['note'], '</th><th>', $track[$key]['id_album'], '</th></tr>';
                }            
            ?>
        </table>
    </div>
    <div class="group">
        <table border 1px>
        <?php
            $key = 0;
            while  ($key<56) {
                echo '<tr><th>', $track[$key]['id_track'],'</th><th>', $track[$key]['name'], '</th><th>', $track[$key]['note'], '</th><th>', $track[$key]['id_album'], '</th></tr>';
                $key++;
            }
        ?>
        </table>
    </div>
    <style>
        body {
            display: flex;
            justify-content: space-between;
            background-image: linear-gradient(180deg,rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 100%, rgba(237, 221, 83, 1) 100%);
        }

        .group {
            border: 1px solid #000;
            background-color: rgba(255, 255, 255, 0.6);
        }
    </style>
</body>
</html>