<?php
include_once "../models/managerModel.php";
include_once "../models/orderModel.php";

$clientsInfo = getClientInfoAll($connect);

if(isset($_POST['showOrder'])) {
	$idClient = $_POST['idClient'];

	$order = getOrderAll($connect, $idClient);

	foreach ($order as $item) {
		$idGood = $item['idGood'];
		$count = $item['count'];
		$goods = getGood($connect, $idGood);
		foreach ($goods as $good) {
			$good['count'] = $count;
			$goodsOrder[] = $good;
		}
	}
	
	/*echo "<pre>";
	print_r($goodsOrder);
	echo "</pre>";*/
}