<?php
/*
Постановка задачи: Системная дата имеет вид 2009-06-15. Нужно преобразовать это значение в строку, строку разделить на компоненты (символ→разделитель→дефис),
потом из этих компонентов сконструировать нужную строку.
*/

$date_str	= "2009-06-15";
$date_array = array();
$date_array = explode("-", $date_str);

var_dump($date_array);

$str_out = $date_array[2] . "/" . $date_array[1] . "/" . $date_array[0];
var_dump($str_out);

print("<br>" . $str_out);

?>