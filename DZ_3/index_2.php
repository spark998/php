<?php
$n = 10;
$a = 0;

do {
	if ($a == 0){
		echo $a . " - это ноль." . "<br>";
	} elseif ($a % 2 == 0) {
		echo $a . " - чётное число." . "<br>";
	} else {
		echo $a . " - нечётное число." . "<br>";
	}
	$a++;
} while ($a <= $n);
?>

<hr>

<?php
$x = 10;
$i = 0;

do {
	switch ($i) {
		case 0:
			echo $i . " - это ноль." . "<br>";
		break;
		default:
			echo ($i % 2 == 0) ? $i . " - чётное число." . "<br>" : $i . " - нечётное число." . "<br>";
	}
	$i++;
} while ($i <= $x);