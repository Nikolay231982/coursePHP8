<?php
echo "<h2>Область видимости переменной</h2>";
echo "<h3>Переменные в блоках цикла и условных конструкций</h3>";

$condition = true;

if($condition){
	$name = "Nikolay";
}

echo $name;
echo "<hr>";

echo "<h3>Локальные переменные</h3>";

function showName(){
	$nameIn = 'Локальная переменная';//Локальная переменная внутри функции
	echo $nameIn;
}
showName();
echo "<hr>";

echo "<h3>Статические переменные</h3>";
function getCounter(){
	static $counter = 0;
	$counter++;
	echo $counter;
}
getCounter();
getCounter();
getCounter();
echo "<hr>";

echo "<h3>Глобальные переменные</h3>";

$nameS = "Jack";
function changeName(){
	global $name; // Jack
	$nameS = 'Tomas';
}
//changeName();
echo $nameS; //Tomas



