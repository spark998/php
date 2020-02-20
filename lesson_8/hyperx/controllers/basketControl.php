<?php
include_once "../models/basketModel.php";
include_once "../models/model.php";

if (isset($_GET['addBasketid'])) {
	(int)$id = $_GET['addBasketid'];
	
	$sql = "SELECT * FROM `goods` WHERE id=$id";
	$res = mysqli_query($connect, $sql);
	while ($data = mysqli_fetch_assoc($res)) {
		$dataArr = $data;
	}
	$nameGoods = $dataArr[nameGoods];
	$imgName = $dataArr[imgName];
	$price = $dataArr[price];

	$goodBasket = getGoodBasket($connect, $id, 'basket');

	if ($goodBasket) {
		$sql = "UPDATE `basket` SET `count`= `count`+1 WHERE good_id=$id";
		$res = mysqli_query($connect, $sql);
	} else {
		goodsBasket_new($connect, $id, $nameGoods, $imgName, $price, '1');
	}
};

if (isset($_GET['deleteToBasketid'])) {
	(int)$id = $_GET['deleteToBasketid'];

	$goodBasket = getGoodBasket($connect, $id, 'basket');

	if ($goodBasket['count'] > 1) {
        $sql = "UPDATE `basket` SET `count`= `count`-1 WHERE good_id=$id";
        $res = mysqli_query($connect, $sql);
    } else {
        $sql = "DELETE FROM `basket` WHERE good_id=$id";
        $res = mysqli_query($connect, $sql);
    }
};

if (isset($_GET['deleteToBasketRow'])) {
	(int)$id = $_GET['deleteToBasketRow'];

	goodsBasketDeleteRow($connect, $id);
};

$countGoodsOrder = countGoodsOrder($connect);

if (isset($_GET['getBasketGoods'])) {
	$goodsBasket = renderBasket($connect);
};


