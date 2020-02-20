<?php
require_once "../config/config.php";

function goodDelete($connect, $id) {
    if ($id == 0)
        return false;
    $query = sprintf("DELETE FROM goods where id='%d'", $id);
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    return mysqli_affected_rows($connect);
}

function getGoods($connect, $id) {
    $query = sprintf("SELECT * FROM goods where id=%d", (int)$id);
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $good = mysqli_fetch_assoc($result);
    return $good;
}

function addNewGood($connect, $nameGood, $description, $price, $imgName) {
    $req = "INSERT INTO goods (nameGoods, description, price, imgName) VALUES ('%s', '%s','%s','%s')";

    $query = sprintf($req, mysqli_real_escape_string($connect, $nameGood), mysqli_real_escape_string($connect, $description), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $imgName));
    $result = mysqli_query($connect, $query);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}

function translit($string) {
    $translit = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ы' => 'y', 'ъ' => '', 'ь' => '', 'э' => 'eh', 'ю' => 'yu', 'я' => 'ya');

    return str_replace(' ', '_', strtr(mb_strtolower($string, 'utf-8'), $translit));
}

function goodsEdit($connect, $id, $nameGoods, $price, $description, $imgName) {
    $id = (int)$id;
    $sql = "UPDATE goods SET nameGoods='%s', price='%s', description='%s',imgName='%s' WHERE id='%d'";
    $query = sprintf($sql, mysqli_real_escape_string($connect, $nameGoods), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $description), mysqli_real_escape_string($connect, $imgName), $id);

    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    return mysqli_affected_rows($connect);
}