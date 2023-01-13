<?php

echo <<<"STR"
<div>Для совершения повторяемых действий в PHP используются циклы</div>
STR;

echo "<h2>Цикл FOR</h2>";

$a = 1;
for (; $a <= 10; $a++){
    echo "Квадрат числа $a равен " . $a * $a . "<br>";
}

$i = 3;
for( ; $i <= 15; ){
    echo "<hr>";
    echo "Каждое число прибавляется на  " . $i . "<br>";
    $i += 3;
}
for($a =1,$b = 1;$a + $b < 10;$a++,$b +=2){
    echo "$a + $b= " . $a + $b . "<br>";
}
echo "<hr>";
echo "<h2>Цикл while</h2>";

$counter = 1;
$b =2;
while( $counter <= 10){
    echo "Каждое число умноженное на два " . $counter * $b . "<br>";
    $counter++;
}
echo "<hr>";

echo "<h2>Цикл do ... while</h2>";

$c = 1;
do {
    echo $c * $c . "<br>";
    $c++;
}
while($c <= 10);
echo "<hr>";

echo "<h2>Операторы continue и break</h2>";

for($i = 0; $i <= 10 ; $i++){
    if($i == 3){
        continue;
    }
    echo $i . "<br>";
}
echo "<hr>";
for ($i = 1; $i < 10; $i++) {
    $result = $i * $i;
    echo "<p>Результат - $result</p>";
    if($result > 80) {
        break;
    }
    echo "Квадрат числа $i равен $result <br>";
}

echo "<hr>";

echo "<h2>Вложенные цикла</h2>";

echo "<table>";
for ($i =1;$i <= 10;$i++) {
    echo "<tr>";
        for($a = 1; $a <= 10; $a++){
            echo "<td>" . $i * $a  . "</td>";
        }
    echo "</tr>";
}
echo "</table>";