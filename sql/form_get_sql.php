<html>
<head>
	<title>Пример передачи данных из формы в БД</title>
</head>

<body>
	<h1><?= "Hello, users!"; ?></h1>
	<?php
		if( !empty($_GET["firstname"]) && !empty($_GET["lastname"]) && !empty($_GET["subname"])) {
			$mysqli = new mysqli("localhost", "root", "", "php_example");
			$mysqli->set_charset("utf8");
			if ($mysqli->connect_errno) {
				echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
			$str_sql = 'insert into users(id, firstname, lastname, subname) values ("",';
			$str_sql .= '"' . $_GET["firstname"] . '",';
			$str_sql .= '"' . $_GET["lastname"] . '",';
			$str_sql .= '"' . $_GET["subname"] . '");';
			
			echo "<br>Запрос на добавление: " . $str_sql;
			echo "<br>";
			
			if(!$mysqli->real_query($str_sql))	{
				echo "Не удалось выполнить запрос: (" . $mysqli->errno . ") " . $mysqli->error;
			}
			else {
				echo "Запись: " . $_GET["firstname"] . " " . $_GET["lastname"] . " " . $_GET["subname"];
				echo "<br>Успешно добавлена в таблицу users";
				$mysqli->real_query("SELECT * FROM users order by id");
				$res = $mysqli->use_result();

				echo "<br><h2>В таблице users уже есть</h2>";
				while($row = $res->fetch_assoc()) {
					echo " id = " . $row['id'] . " " . $row['lastname'] . " " . $row['firstname'] . " " . $row['subname'] . " ". "<br>";
				}
				$mysqli->close();
			}
			exit();
		}
		else	{
			echo "Заполните все поля формы!";
			$mysqli = new mysqli("localhost", "root", "", "php_example");
			$mysqli->set_charset("utf8");
			if ($mysqli->connect_errno) {
				echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			}

			$mysqli->real_query("SELECT * FROM users");
			$res = $mysqli->use_result();

			echo "<br><h2>В таблице users уже есть</h2>";
			while($row = $res->fetch_assoc()) {
				echo " id = " . $row['id'] . " " . $row['firstname'] . " " . $row['lastname'] . " " . $row['subname'] . " ". "<br>";
			}
			$mysqli->close();
			echo "<br>";
	?>
   <form action = "<?php $_PHP_SELF?>" method = "GET">
      Фамилия?: <input type = "text" name = "lastname" ><br><br>
      Имя?: <input type = "text" name = "firstname" ><br><br>
      Отчество?: <input type = "text" name = "subname" ><br><br>
      <input type = "submit" >
   </form>
   <?php
		}
	?>
</body>
</html>
