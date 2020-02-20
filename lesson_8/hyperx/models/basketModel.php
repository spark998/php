<?php
require_once "../config/config.php";

function goodsBasket_new($connect, $good_id, $nameGoods, $imgName, $price, $count) {
    $req = "INSERT INTO basket (good_id, nameGood, imgGood, price, count) VALUES ('%s', '%s', '%s', '%s', '%s')";
	$query = sprintf($req, $good_id, mysqli_real_escape_string($connect, $nameGoods), mysqli_real_escape_string($connect, $imgName), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $count));
	$result = mysqli_query($connect, $query);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}

function sumBasketRow($count, $price) {
	$sumRow = $count*$price;
	return $sumRow;
}

function sumBasketTotal($arr) {
	if($arr) {
		$total = array_sum($arr);
		return $total;
	} else {
		echo 0;
	}
}

function getGoodBasket($connect, $id, $table) {
    $query = sprintf("SELECT * FROM {$table} where good_id=%d", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $res = mysqli_fetch_assoc($result);

    return $res;
}

function renderBasket($connect) {
    $query = "SELECT * FROM basket order by id";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

	$n = mysqli_num_rows($result);

	if ($n > 0) {
		$goods = array();
		for ($i = 0; $i < $n; $i++) {
			$row = mysqli_fetch_assoc($result);
			$goods[] = $row;
		}
		return $goods;   
	} else {
		return NULL;
	}     
}

function countGoodsOrder($connect) {
    $query = "SELECT sum(`count`) AS count FROM `basket`";
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $countOrder = mysqli_fetch_assoc($result);
    return $countOrder['count'];
}

function goodsBasketDeleteRow($connect, $id) {
    if ($id == 0)
        return false;
    $query = sprintf("DELETE FROM basket where id='%d'", $id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}