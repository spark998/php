<?php
require_once "../config/config.php";

function goodsBasketAll($connect) {
    $query = "SELECT * FROM basket order by id";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $goods = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }
    return $goods;
}

function clientInfoNew($connect, $name, $phone, $pay, $delivery, $address, $comment, $orderAmount) {
    $sql = "INSERT INTO client_info (name, phone, pay, delivery, address, comment, orderAmount) VALUES ('%s', '%s', '%s', '%s','%s','%s', '%s')";
    $query = sprintf($sql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $phone), mysqli_real_escape_string($connect, $pay), mysqli_real_escape_string($connect, $delivery), mysqli_real_escape_string($connect, $address), mysqli_real_escape_string($connect, $comment),  mysqli_real_escape_string($connect, $orderAmount));

    $result = mysqli_query($connect, $query);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}

function getClientInfoAll($connect) {
    $query = "SELECT * FROM client_info";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $data = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $data[] = $row;
    }
    return $data;
}

function newOrderToManager ($connect, $idClient, $idGood, $count){
	$query = "INSERT INTO order_manager (idClient, idGood, count) VALUES ($idClient, $idGood, $count)";
	$result = mysqli_query($connect, $query);
    return true;
}

function goodsBasketDeleteAll($connect) {
    $query = sprintf("TRUNCATE `basket`");
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));
    return mysqli_affected_rows($connect);
}

