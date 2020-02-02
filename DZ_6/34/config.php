<?php
const SERVER = "localhost";
const DB = "shop";
const LOGIN = "root";
const PASSWORD = "";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or 
		die("Ошибка соединения с БД");