<html>

<head>
	<title>Страница с примером передачи переменных с помощью Get</title>
</head>

<body>
	<h1><?= "Hello, World!"; ?></h1>
	<?php
	if( !empty($_POST["name"])) {
	   echo "Привет, ". $_POST['name'] . " " . $_POST['famely'] . "!";
	   exit();
	}
	?>
   <form action = "hello_form_post.php" method = "POST">
		Как тебя зовут?: <input type = "text" name = "name" ><br>
		А фамилия?: <input type = "text" name = "famely" ><br><br>
		<input type = "submit" >
	</form>
</body>
</html>
