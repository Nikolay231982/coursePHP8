<?php
echo "<h2>Генераторы</h2>";

echo <<<"EOL"
<h3>Генератор предоставляет функцию, которая генерирует набор значений</h3>
EOL;
echo "<hr>";
function generator(){
    yield 34;
    // функция генератора фактически возвращает только одно число
}
// Результат функции можно перебрать в цикле как массив
foreach (generator() as $number){
    echo $number;
}
echo "<hr>";

function generateNumbers()
{
    for ($i = 0; $i <= 5; $i++) {

        yield $i;
    }
}
foreach(generateNumbers() as $number)
{
    echo $number; // 012345
}
echo "<hr>";

function generatesNumbers(){
    yield 1;
    yield from [2,3,4]; // массив
    yield 5;
}
foreach (generatesNumbers()as $number) {
    echo $number;
}

