<?php

echo "<h2>Ассоциативные массивы</h2>";

$words = ['red'=>'Красный','blue'=>'Синий','green'=>'Зеленый'];
echo $words['red'];
echo "<br>";
echo $words['green'];
echo "<hr>";
$words = ['red'=>'Красный','blue'=>'Синий','green'=>'Зеленый'];
$words['white'] = 'Белый';

foreach ($words as $key=>$item) {
    echo $key . " - " . $item . "<br>";
}
