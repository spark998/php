<?php
$num1 = (isset($_GET['num1']) ? (int)($_GET['num1']) : "");
$num2 = (isset($_GET['num2']) ? (int)($_GET['num2']) : "");
$operation = $_GET['operation'];


$res = mathOperation($num1, $num2, $operation);
function mathOperation($arg1, $arg2, $operation){
	switch($operation){
		case "+":
			return $arg1 + $arg2;
		break;
		case "-":
			return $arg1 - $arg2;
		break;
		case "*":
			return $arg1 * $arg2;
		break;
		case "/":
			return ($arg2 == 0) ? "Деление на ноль не возможно" : $arg1 / $arg2;
	}
}













