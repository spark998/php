<?php
include "config.php";

$sql = "SELECT * FROM product";
$res = mysqli_query($connect, $sql);


//функция для экранирования 
function clear(){
	global $connect;
	foreach ($_POST as $key => $value) {
		$_POST[$key] = mysqli_real_escape_string($connect, $value);
	}
}
//функция принимает и записывает данные в ДБ
function save_mess(){
	global $connect;
	clear();
	extract($_POST);
	$query = "INSERT INTO comments (name, text) VALUES ('$name', '$text')";
	mysqli_query($connect, $query);
}
//функция вывода сообщений
function get_mess(){
	global $connect;
	$query = "SELECT * FROM comments ORDER BY id DESC";
	$res = mysqli_query($connect, $query);
	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

if(!empty($_POST)) {
	save_mess();
	header("location: {$_SERVER['PHP_SELF']}");
	exit;
}
$messages = get_mess();
