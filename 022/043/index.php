<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	<ul>
	<?php
		require "teams.php";

		if (isset($_GET["id"])) {
			$id = $_GET['id'];
			foreach ($content as $con) {
				if ($con['id'] == $id) {
					echo  '<li>',$con['id'],'</li><br><li>'. $con['name'],'</li><br><li>', $con['country'],'</li><br><li>', $con['date'],'</li><br><li>', $con['style'],'</li>';
			}      
		}
		}	else {
			foreach ($content as $con) {
	echo  '<li>',$con['id'],'</li><br><li>'. $con['name'],'</li><br><li>', $con['country'],'</li><br><li>', $con['date'],'</li><br><li>', $con['style'],'</li><hr>';
    
}
		}
	?>
	</ul>

</body>
</html>