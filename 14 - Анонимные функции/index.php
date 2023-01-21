<?php

echo "<h2>Анонимные функции</h2>";

$hello = function ($name) {
    echo "Привет меня зовут " . $name;
};

$hello('Nikolay'); // Вызов анонимной функции
echo "<hr>";

$sum = function ($a, $b) {
   return $a + $b;
};
$number = $sum(1,5);
echo $number;
echo "<hr>";

function welcome($message){
    $message();
}
$goodMorning = function (){
    echo "<h3>Доброе утро</h3>";
};
$goodEvening = function (){
    echo "<h3>Добрый вечер</h3>";
};

welcome($goodMorning);
welcome($goodEvening);
echo "<hr>";

//function sum($arr1){
//    $result = 0;
//    foreach ($arr1 as $arr2){
//        $result += $arr2;
//    }
//    return $result;
//}
//
//$arr1 = [-2,-1, 0, 1, 2, 3, 4, 5];
//$number = sum($arr1);
//echo $number;
echo "<hr>";


function sum($numbers, $condition)
{
    $result = 0;
    foreach($numbers as $number){
        if($condition($number))
        {
            $result += $number;
        }
    }
    return $result;
}

// для четных чисел
$isEvenNumber = function($n){ return $n % 2 === 0;};
// для положительных чисел
$isPositiveNumber = function($n){ return $n > 0;};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum($myNumbers, $isPositiveNumber);
$evenSum = sum($myNumbers, $isEvenNumber);
echo "Сумма положительных чисел: $positiveSum <br /> Сумма четных чисел: $evenSum";