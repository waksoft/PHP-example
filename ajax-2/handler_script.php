<?php
echo "Метод передачи данных: ".$_SERVER['REQUEST_METHOD'];
echo "<br/>получили посредством AJAX технологии следующие данные:";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>