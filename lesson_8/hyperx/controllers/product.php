<?php
include_once "../models/model.php";

$goods = getItemsAll($connect, 'goods');

if (isset($_GET[id])) {
    $id = $_GET[id];
}
$good = getOneItem($connect, $id, 'goods');
