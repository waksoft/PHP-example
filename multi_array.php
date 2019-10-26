<?php
/*
Многомерные массивы
*/

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);
?>
<h1>Многомерные массивы</h2>
<?php

print("<br>");
print($array['foo']);
print("<br>");
echo "foo = " . $array['foo'];
print("<br>");
echo "multi=>dimensional=>array = " . $array["multi"]["dimensional"]["array"];
print("<br>");

print("<br>foo = ");
var_dump($array["foo"]);
print("<br>42 = ");
var_dump($array[42]);
print("<br>array = ");
var_dump($array["multi"]["dimensional"]["array"]);
?>