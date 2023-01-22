<?php

echo "<h2>Ссылки в PHP позволяют ссылаться на область памяти, где расположено значение переменной или параметра</h2>";

echo "<h3>Параметры по значению</h3>";
$tom = "Tom";
$sam = & $tom; // передача ссылки.Обе переменных будут указывать на один и тот же адрес в памяти
$sam = "Sam";
echo "tom = $tom<br>"; //
echo "sam = $sam";
echo "<hr>";

echo "<h3>Передача по ссылке</h3>";

function square($a){
	$a *= $a;
	echo "a = $a";
}

$number = 5;
square($number);
echo "<br> number = $number";
echo "<hr>";

echo "<h3>Возвращение ссылки из функции</h3>";

function &checkName(&$name){
	if($name === 'admin'){
		$name = "Tom";
		return $name;
	}
}

$userName = 'admin';
$checkedName = &checkName($userName);
echo "<br>userName: $userName";
echo "<br>checkedName: $checkedName";

