<?php

echo "<h2>Многомерные массивы</h2>";

$colors = [
    ["White", "Blue"],
    ['Green', 'Black'],
    ['Red', 'Yellow']
];
echo $colors[0][1] . "<br>"; // Blue
echo $colors[1][0]; // Green
echo "<hr>";
echo "<table>";
foreach ($colors as $color) {
    echo "<tr>";
    foreach ($color as $item) {
        echo "<td>$item</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "<hr>";
echo "<h2>Многомерный ассоциативный массив - Перебор массива</h2>";
$phones = [
    'apple'=>['iphone12','iphoneX','iphone12Pro'],
    'samsung'=>['SamsungG20','SamsungS20U'],
    'nokia'=>['Nokia8','Nokia9']
];

foreach ($phones as $brand=>$items){
    echo "<h2>$brand</h2>";
    echo "<ul>";
    foreach ($items as $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";
}