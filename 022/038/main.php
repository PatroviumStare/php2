<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<h1>Управляющие конструкции</h1>

	<h2>Циклы</h2>
	<hr>
	<h2>Вывод массива</h2>

	<?php
        include('arrays.php');
		
		// используя цикл foreach выполняем обход массива $team
		foreach ($team as $key => $item) {
			echo "
				Группа: {$item['name']} (id = {$item['id_team']})<br/>
				Страна: {$item['country']}<br />
				Дата основания: {$item['date']}<br />
				Стиль: {$item['style']}<br />
				<hr/><p>
				";
		}	

        // используя цикл foreach выполняем обход массива $team
		foreach ($team as $key => $item) {
			echo "
				Группа: {$item['name']} (id = {$item['id_team']})<br/>
				Страна: {$item['country']}<br />
				Дата основания: {$item['date']}<br />
				Стиль: {$item['style']}<br />
				<hr/><p>
				";
		}	
        
        $li = "";
		
		// проходим массив циклом
		foreach ($track as $item) {
			// формируем элементы списка
			$li .= "<li>(id={$item['id_track']}) {$item['name']}</li>";
		};

		// формируем нумерованный список
		echo "<ol>" . $li . "</ol>";
	?>


</body>
</html>