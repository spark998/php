<?php
require_once "../config/config.php";

function getItemsAll($connect, $table, $orderby = 'id') {
    $query = "SELECT * FROM {$table} order by {$orderby} desc";
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

function getOneItem($connect, $id, $table) {
    $query = sprintf("SELECT * FROM {$table} where id=%d", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));
    $res = mysqli_fetch_assoc($result);

    return $res;
}

function newUser($connect, $name, $login, $email, $pass) {
    $t = "INSERT INTO users (name, login, email, password) VALUES ('%s','%s','%s','%s')";
    $query = sprintf($t, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $login), mysqli_real_escape_string($connect, $email), mysqli_real_escape_string($connect, $pass));
    $result = mysqli_query($connect, $query);
    if (!$result) {
        die(mysqli_error($connect));
    }
    return true;
}