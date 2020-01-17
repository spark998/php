<?php
$a = 7;
$b = 15;

if ($a >= 0 && $b>= 0) {
	echo $a - $b;
} elseif ($a < 0 && $b < 0) {
	echo $a * $b;
} else {
	echo $a + $b;
}

