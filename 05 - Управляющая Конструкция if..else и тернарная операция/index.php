<?php
echo "<h2>Управляющая конструкция IF</h2>";
$a = 5;
if($a > 0) {
    echo 'Переменная $а больше 0';
}
echo "<hr>";

echo "<h2>Управляющая конструкция IF ELSE</h2>";
$b = 3;
if($b < 4) {
    echo 'переменная $b больше 4';
} else {
    echo 'переменная $b меньше 4';
}

echo "<hr>";

echo "<h2>Управляющая конструкция IF ELSEIF ELSE</h2>";
$c = 5;
if($c > 4){
    echo 1;
}elseif ($c< 4){
    echo 2;
}else {
    echo 3;
}
echo "<hr>";

//if (0) {}       // false
//if (-0.0) {}    // false
//if (-1) {}      // true
//if ("") {}      // false (пустая строка)
//if ("a") {}     // true (непустая строка)
//if (null) {}    // false (значие отсутствует)

$a = 5;
$b = 6;
$sum = $a < $b ? $a+$b : $a - $b;
echo $sum;