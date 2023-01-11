<?php

echo "<h2>Арифметические операторы</h2>";

$num1 = +'1'; //Конвертация $a in INT or FLOAT,что более подходит и смена знака
echo var_dump($num1); // преобразует из строки в int
echo "<hr>";
$num2 = -2; //смена знака
echo $num2;
echo "<hr>";
$num3 = 5;
echo $num3 + 3; // Сумма
echo "<hr>";
$num4 = $num3;
echo $num4 - 3; // Разность
echo "<hr>";
$num5 =4;
echo $num5 * 4; //Произведение
echo "<hr>";
$num6 = 10;
echo $num6 / 2; // Частное от деления
echo "<hr>";
echo 17 % 8; // Получим остаток от деления 1
echo "<hr>";
echo 3 ** 4; // 3 * 3 * 3 * 3 81

echo "<h2>Инкремент и декремент</h2>";

$a = 5;
$b = 10;
$res = $b - $a + ++$b + $a++ - --$b + $b++ - --$a;
echo $res;

echo "<h2>Оператор конкатенации</h2>";

$str1 = "Привет";
$str2 = "Мир";
echo $str1 . " " . $str2;

echo "<h2>Операторы сравнения</h2>";

echo '== РАВНО<br>';
echo '=== РАВНО и имеет тот же тип данных<br>';
echo '!= не равно<br>';
echo '<> не равно<br>';
echo '!== не равно и имеют разный тип данных<br>';
echo '< МЕНЬШЕ<br>';
echo '<= МЕНЬШЕ ИЛИ РАВНО<br>';
echo '> бОЛЬШЕ<br>';
echo '>= бОЛЬШЕ ИЛИ РАВНО<br>';
echo '<=> Космический корабль<br>';

echo "<h2>Логические операторы</h2>";
echo '$a and $b - И<br>';
echo '$a or $b - ИЛИ <br>';
echo '$a xor $b - Исключающее ИЛИ<br>';
echo '!$a - Отрицание<br>';
echo '$a && $b - И<br>';
echo '$a || $b - ИЛИ<br>';

echo "<h2>Оператор присваивания</h2>";
echo '= Базовый оператор присваивания<br>';
echo "<hr>";
$a = 12;
$a += 5; //$a = $a + $b
echo $a;
echo "<hr>";
$a = 10;
$a -= 3;
echo $a;
echo "<hr>";
$a = 20;
$a /= 5;
echo $a;
echo "<hr>";
$a = 2;
$a *= 4;
echo $a;
echo "<hr>";
$a = 10;
$a %= 3;
echo $a;



