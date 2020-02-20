<?php
echo '№1  for';

$arrList = ['Home', 'Abuot', 'Projects', 'Contact'];
$arrList1 = ['Home', 'Abuot', 'Projects', 'Contact', 'Projects','Projects'];

$list = "<ul>";
for ($i = 0; $i < count($arrList); $i++) {
	$list .= "<li>";
		$list .= $arrList[$i];
		$list .= "<ul>";
		for ($a = 0; $a < count($arrList1); $a++){
			$list .= "<li> $arrList1[$a] </li>";
		}
		$list .= "</ul>";
	$list .= "</li>";
}
$list .= "</ul>";
echo $list;

echo "<hr>";

echo '№2 while';

$list = "<ul>";
$n = 1;
$i = 0;
$arrList = ['Home', 'Abuot', 'Projects', 'Contact'];
$arrList1 = ['Home', 'Abuot', 'Projects', 'Contact', 'Projects','Projects',];

while($n<=count($arrList)){
	$list .= "<li>";
		$list .= $arrList[$i];
		$list .= "<ul>";
		$a = 1;
		$x = 0;
		while($a<=count($arrList1)){
			$list .= "<li> $arrList1[$x] </li>";
			$x++;
			$a++;
		}
		$list .= "</ul>";
	$list .= "</li>";
	$i++;
    $n++;
}
$list .= "</ul>";
echo $list;