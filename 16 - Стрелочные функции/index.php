<?php

echo "<h2>Стрелочные функции</h2>";

$a = 2;
$b = 6;

$number = fn($c) => $a + $b + $c;
$result = $number(13);
echo $result;

