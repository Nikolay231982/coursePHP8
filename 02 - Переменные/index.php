<?php

//Переменные
$num = 10; // Создали переменную и присвоили значение 10
echo $num; // На экран выводим переменную со значением 10
echo "<hr>";
$num = 20; // Перезаписали переменную на значение 20
echo $num; // На экране будет 20
echo "<hr>";
$num1 = $num; // переменной $num1 будет присвоенно значение 20
echo $num1; // На экране будет 20;
echo "<hr>";
$a; // создали переменную а , но значение не указали
echo $a; // Ошибка WARNING
echo "<hr>";
echo "<h2>Вывод 2x значений переменной</h2>";
$num1 = 10;
$num2 = 20;
echo " num1 = $num1 num2 = $num2"; // Выводим 2е переменные в одну строку в двойных кавычках

