<?php
function sum($arg1, $arg2) {
	return $arg1 + $arg2;
}

function subtraction($arg1, $arg2) {
	return $arg1 - $arg2;
}

function multiplication($arg1, $arg2) {
	return $arg1 * $arg2;
}

function division($arg1, $arg2) {
	return ($arg2 == 0) ? "Деление на ноль не возможно" :  $arg1 / $arg2;
}

$a = 34;
$b = 15;

echo $sum = sum($a, $b) . '<br>';
echo $sub = subtraction($a, $b) . '<br>';
echo $mult = multiplication($a, $b) . '<br>';
echo $div = division($a, $b) . '<br>';

