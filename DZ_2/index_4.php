<?php
function mathOperation($arg1 = 0, $arg2 = 0, $operation) {
	switch ($operation) {
		case '+':
			return $arg1 + $arg2;
		break;
		case '-':
			return $arg1 - $arg2;
		break;
		case '*':
			return $arg1 * $arg2;
		break;
		case '/': 
			return ($arg2 == 0) ? "Деление на ноль не возможно" :  $arg1 / $arg2;
		break;
	}
}

echo mathOperation(108, 87, '*');