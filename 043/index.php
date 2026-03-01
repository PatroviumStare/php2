<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	
	<?php
		require "teams.php";

		if(isset($_GET['id'])) {
			foreach ($content as $con) {
				if($con['id'] == $_GET['id']) {
					echo "<hr>id: {$con['id']}<br>name: {$con['name']}<br>country: {$con['country']}<br>date: {$con['date']}<br>style: {$con['style']}<hr>";
			}
		}
		} else {
			foreach ($content as $con) {
				echo "<hr>id: {$con['id']}<br>name: {$con['name']}<br>country: {$con['country']}<br>date: {$con['date']}<br>style: {$con['style']}<br><hr>";
		}
		}
	?>
	

</body>
</html>