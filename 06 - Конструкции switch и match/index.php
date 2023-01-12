<?php

echo "<h2>Управляющая конструкция switch</h2>";


$str = 'two';

switch ($str) {
    case "one":
        echo "one";
        break;
    case "two":
        echo "two";
        break;
    case "three":
        echo "three";
        break;
}

echo "<h2>Управляющая конструкция match</h2>";

$str = 'two';
$oper = match ($str) {
    'one' => 1,
    'two' => 1 + 1,
    'three' => 2 + 1,
    default=> 3+1,
};
echo $oper;

