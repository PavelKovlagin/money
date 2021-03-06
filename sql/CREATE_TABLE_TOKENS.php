<!DOCTYPE html>
<html>
<head>
	<title>Create table tokens</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.php">
</head>
<body>
<?php
	require_once 'conf.php';

	$link = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE) or die ("<h1 class='error'>Ошибка соединения</h1>");
	$query = "CREATE TABLE tokens 
			(
				id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
				token VARCHAR(200) NOT NULL UNIQUE,
				user_id INT,
				FOREIGN KEY (user_id) REFERENCES users (id)
			)";
	$result = mysqli_query($link, $query) or die("<h1 class='error'>Ошибка создания таблицы tokens</h1>");
	if ($result) {
		echo "<h1 class='success'>Создание таблицы tokens прошло успешно</h1>";
	}
	mysqli_close($link);
?>
</body>
</html>