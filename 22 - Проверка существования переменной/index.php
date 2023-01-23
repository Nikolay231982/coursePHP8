<?php
echo "<h1>Проверка существования переменной</h1>";

echo "<h2>Функция ISSET()</h2>";

$message = "Hello PHP";
if(isset($message)){
	echo $message;
}else {
	echo "Переменная message не определена";
}

echo "<h2>Функция empty()</h2>";


$var = '';
if(empty($var)){
	echo "Переменная пуста";
}else {
	echo "Переменная не пуста";
}

echo "<h2>Функция unset() удалить переменную</h2>";
$a = 20;
unset($a);
echo $a; // WARNING
