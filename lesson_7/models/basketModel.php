<?php
require_once "../config/config.php";

function goodsBasket_new($connect, $id, $nameGoods, $imgName, $price, $count)
{
    $query = "INSERT INTO basket (good_id, nameGood, imgGood, price, count) VALUES ('%s', '%s', '%s', '%s', '%s')";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}
