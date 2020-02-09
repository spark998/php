<?php
include_once "../models/basketModel.php";
include_once "../models/model.php";

if (isset($_GET[id])) {
	 $id = $_GET[id];
}
$sql = "SELECT * FROM `goods` WHERE id=$id";
$res = mysqli_query($connect, $sql);
while ($data = mysqli_fetch_assoc($res)) {
	$dataArr = $data;
}

$nameGoods = $dataArr[nameGoods];
$imgName = $dataArr[imgName];
$price = $dataArr[price];


$goodBasket = getOneItem($connect, $id, 'basket');

if ($goodBasket) {
	$sql = "UPDATE `basket` SET `count`= `count`+1 WHERE id=$id";
	$res = mysqli_query($connect, $sql);
} else {
	goodsBasket_new($connect, $id, $nameGoods, $imgName, $price, '1');
}