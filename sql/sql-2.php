<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf8">
	</head>

	<body>
		<h1>Hello, SQL!</h1>
		<?php
		$mysqli = new mysqli("localhost", "root", "", "my_sql");
		echo "<br>Кодировка по умолчанию: " . mysqli_character_set_name ( $mysqli ) . "<br>";
		$mysqli->set_charset("utf8");
		if ($mysqli->connect_errno) {
			echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

		if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
			!$mysqli->query("CREATE TABLE test(id INT)") ||
			!$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
			echo "Не удалось создать таблицу: (" . $mysqli->errno . ") " . $mysqli->error;
		}

		$res = $mysqli->query("SELECT id FROM test ORDER BY id ASC");

		echo "Обратный порядок...<br>";
		for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
			$res->data_seek($row_no);
			$row = $res->fetch_assoc();
			echo " id = " . $row['id'] . "<br>";
		}

		echo "Исходный порядок строк...<br>";
		$res->data_seek(0);
		while ($row = $res->fetch_assoc()) {
			echo " id = " . $row['id'] . "<br>";
		}

		$mysqli->real_query("SELECT * FROM users");
		$res = $mysqli->use_result();

		echo "<br><h2>Таблица users</h2>";
		while($row = $res->fetch_assoc()) {
			echo " id = " . $row['id'] . " " . $row['lastname'] . " " . $row['firstname'] . " " . $row['subname'] . " ". "<br>";
		}
		?>
	</body>
</html>

