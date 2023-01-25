<?php

$name = 'Nikolay';
$age = 34;

if(isset($_GET['name'])){
	$name = $_GET['name'];
}

if(isset($_GET['age'])){
	$age = $_GET['age'];
}

echo "Имя: $name <br> Возраст: $age";

/*?name=value&name=value*/