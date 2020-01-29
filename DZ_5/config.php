<?php
const SERVER = "localhost";
const DB = "gallery";
const LOGIN = "root";
const PASSWORD = "";	

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or 
	die("Ошибка соединения с БД");
