<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Конструкции</h2>
	<hr>
	<h2>Включения файлов</h2>
	
	<?php
        echo '<h2>Include</h2>';
		for($i=1; $i<=5; $i++) {

		include "$i.txt";

		echo "<br />";

		}

        echo '<h2>Require</h2>';

        for($i= 1; $i<= 5; $i++) {
            require "$i.txt";

            echo "<br />";
        }
	?>
	

</body>
</html>