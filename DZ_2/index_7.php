<?php
$hour = date('H');
$minutes = date('i');

function outTimes($hour, $minutes) {
	if(empty($hour) || empty($minutes)) {
		return "Время не задано";
		exit;
	}
	$arrWords1 = ['час', 'часа', 'часов'];
	$arrWords2 = ['минута', 'минуты', 'минут'];

	function outWord($val, $array) {
		$num = $val % 100;
		if ($num > 19) {
			$num = $num % 10;
		}
		$result =  $val . ' ';
		switch ($num) {
			case 1: 
				$result .= $array[0];
				break;
			case 2:
			case 3:
			case 4: 
				$result .= $array[1];
				break;
			default: $result .= $array[2];
		}
		return $result;
	}
	return $res_out = outWord($hour, $arrWords1) . " " . outWord($minutes, $arrWords2);
}
?>

<h1><?= outTimes($hour, $minutes) ?></h1>


<hr>
<!-- ==========ВАРИАНТ 2 ===============-->
<?php
/*$words_h = ['час', 'часа', 'часов'];
$words_m = ['минута', 'минуты', 'минут'];

function outWord($val, $array) {
	$num = $val % 100;
	if ($num > 19) {
		$num = $num % 10;
	}

	$result =  $val . ' ';
	switch ($num) {
		case 1: 
			$result .= $array[0];
			break;
		case 2:
		case 3:
		case 4: 
			$result .= $array[1];
			break;
		default: $result .= $array[2];
	}
	return $result;
}

$outTime = outWord(date('H'), $words_h) .' '. outWord(date('i'), $words_m);
*/
?>
<h1><?= $outTime ?></h1>
