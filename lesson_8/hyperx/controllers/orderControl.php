<?php
include_once "../models/orderModel.php";

if (isset($_POST['payOrder'])) {
	
	$goodsBascket = goodsBasketAll($connect);
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$pay = $_POST['pay'];
	$address = $_POST['address'];
	$comment = $_POST['comment'];
	$orderAmount = $_POST['orderAmount'];
	$delivery = $_POST['delivery'];
	
    clientInfoNew($connect, $name, $phone, $pay, $delivery, $address, $comment, $orderAmount);
	
	$clientInfo = getClientInfoAll($connect);
	foreach ($clientInfo as $idClients) {
		$idClient = $idClients['id'];
	}

	foreach ($goodsBascket as $good) {
		$idGood = $good['good_id'];
		$count = $good['count'];
		newOrderToManager ($connect, $idClient, $idGood, $count);
	}
	goodsBasketDeleteAll($connect);
}