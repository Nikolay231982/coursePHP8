<?php

echo "<h2>Замыкания</h2>";

$number = 89;

$showNumber = function () use($number) {
    echo $number;
};

$showNumber();
echo "<hr>";

$name = "Nikolay";
$lastName = "Malakhov";

$hello = function () use($name,$lastName) {
    echo 'Name: ' . $name . "<br>";
    echo 'Family: ' . $lastName;
};

$hello();

