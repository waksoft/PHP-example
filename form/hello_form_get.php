<html>
<head>
<title>Страница с примером передачи переменных с помощью Get</title>
</head>
<body>
<h1><?= "Hello, World!"; ?></h1>
<?php
if( !empty($_GET["name"])) {
   echo "Привет ". $_GET['name'] . " " . $_GET['famely'] . "!";
   exit();
}
?>
   <form action = "<?php $_PHP_SELF?>" method = "GET">
      Как тебя зовут?: <input type = "text" name = "name" ><br><br>
		А фамилия?: <input type = "text" name = "famely" ><br><br>
      <input type = "submit" >
   </form>
</body>
</html>
