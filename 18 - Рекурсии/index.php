<?php

echo "<h2>Рекурсия - это вызов функции самой себя</h2>";
echo "<hr>";

echo "<h2>Вычисление факториала числа</h2>";

function factorial($n){
    if($n <= 1){return 1;}
    return $n * factorial($n - 1);
}
echo factorial(5);
