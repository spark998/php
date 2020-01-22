<?php
$cities = [
	'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
	'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
	'Рязанская область' => ['Рязань', 'Шацк', 'Михайлов', 'Касимов']
];

foreach ($cities as $region => $city){
	$strСity = implode(', ', $city);
	
	echo "$region: <br>" . $strСity . "<br>";
}