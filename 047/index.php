<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 2</h2>
	
	<?php
		// ?search=teams::3
		// ?search=albums::5
		// ?search=tracks::10
		
		require('teams.php');
		require('albums.php');
		require('tracks.php');

		if(isset($_GET['search'])) {
			$search = $_GET['search'];
			list($entity, $id) = explode('::', $search);
			switch ($entity) {
				case 'teams':
					$data = array_filter($content, function($team) use ($id) {
						return $team['id'] == $id;
					});
					break;

					case 'albums':
						$data = array_filter($content, function($album) use ($id) {
							return $album['id'] == $id;
						});
						break;
					case 'tracks':
						$data = array_filter($content, function($track) use ($id) {
							return $track['id'] == $id;
						});
						break;
					default:
						echo "не найдено";
						exit;
			}

			if (empty($data)) {
				echo "запись пуста";
			} else {
				foreach ($data as $item) {
					echo "<pre style='font-size: 1rem'>";
					print_r($item);
					echo "</pre>";
				}
			}
		}
		
	?>
	

</body>
</html>