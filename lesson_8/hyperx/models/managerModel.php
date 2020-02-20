<?php
require_once "../config/config.php";

function getOrderAll($connect, $id) {
    $query = sprintf("SELECT * FROM `order_manager` WHERE idClient='%d'", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

	$n = mysqli_num_rows($result);
    $res = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }
    return $res;
}

function getGood($connect, $id) {
    $query = sprintf("SELECT * FROM `goods` WHERE id='%d'", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

	$n = mysqli_num_rows($result);
    $res = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
		$res[] = $row;
	}
    return $res;
}