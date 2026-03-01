<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Управляющие конструкции</h1>
	<h2>Конструкции</h2>
	
	<?php
		// критерий поиска
		$term = "surname";
		$value = "Маркова";
		
		include ("personnels.php");
		foreach ($content as $con) {
			if ($con[$term] == $value)
				echo "id: {$con['id_personnel']} <br />
				Фамилия: {$con['surname']}<br />
				Имя: {$con['name']} <br />
				Отчество: {$con['patronymic']}<br />
				Должность: {$con['post']} <br />
				Категория: {$con['category']}<br />
				Образование: {$con['level_edu']} <br />
				Стаж работы в ОУ: {$con['experience_total']}";}
	?>
	

</body>
</html>