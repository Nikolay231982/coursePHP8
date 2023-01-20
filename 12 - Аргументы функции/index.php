<?php

echo "<h2>Аргументы функции</h2>";

function hello($name)
{
    echo "Привет $name<br>";
}

hello('Nikolay');
hello('Egor');
hello('Andrey');
echo "<hr>";

function hello1($test)
{
    echo "Test test test $test";
}

$test = 'Значение из переменной';
hello1($test);
echo "<hr>";

function displayInfo($name1, $age1)
{
    echo "<div>Имя: $name1 <br>Возраст: $age1</div><hr>";
}

displayInfo(name1: 'Том', age1: 34); // Именнованный параметр PHP 8
displayInfo('Bob', 12);
displayInfo('Sam', 45);
echo "<hr>";
function sum(...$numbers)
{
    $result = 0;
    foreach ($numbers as $number){
        $result += $number;
    }
    echo "<p>Сумма: $result</p>";
}

sum(1,2,3);