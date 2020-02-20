<?php
include_once "../models/model.php";
include_once "../models/adminModel.php";

$goods = getItemsAll($connect, 'goods');

if (isset($_GET['edit'])) {
	(int)$id = $_GET['edit'];
	$goodEdit = getGoods($connect, $id);
}

if (isset($_POST['addNewGood']) || isset($_POST['goodEdit'])) {

	if ($_FILES['photo']['name']) {
		$imgName = "img/" . $_FILES['photo']['name'];
	} else {
		$imgName = $goodEdit['imgName'];
	}

	$loadFile = $_FILES['photo']['tmp_name'];
	move_uploaded_file($loadFile, $imgName);

	$nameGood = trim(strip_tags($_POST['nameGood']));
	$description = trim(strip_tags($_POST['description']));
	$price = (int)trim(strip_tags($_POST['price']));
	$name = translit($_FILES['photo']['name']);
	if ($_POST['addNewGood']) {
		addNewGood($connect, $nameGood, $description, $price, $imgName);
		header("Location: admin.php");
	} elseif ($_POST['goodEdit']) {
		goodsEdit($connect, $id, $nameGood, $price, $description, $imgName);
		header("Location: admin.php");
	}
}

if (isset($_POST['adminDelGood'])) {
	(int)$id = $_POST['adminDelGood'];
	goodDelete($connect, $id);
}
