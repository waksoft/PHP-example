<?php
/*
Известны длины трёх сторон треугольника. Вычислить периметр треугольника и площадь (указание: формула Герона, использовать модуль math и функцию sqrt ()).
*/

$a = 110;
$b = 50;
$c = 120;

$p = ($a + $b + $c) / 2.0;
?>
<h1>Результаты вычислений</h1>
<?php
print("Полупериметр треугольника:  $p<br>");
$s = sqrt($p * ($p-$a) * ($p-$b) * ($p-$c));

print("Площадь треугольника:  $s");