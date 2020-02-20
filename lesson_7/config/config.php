<?php
session_start();

const SERVER = "localhost";
const DB = "hx_catalog";
const LOGIN = "root";
const PASSWORD = "";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die("Error: ".mysqli_error($connect));

mysqli_query($connect, "SET NAMES 'utf8'"); 
mysqli_query($connect, "SET CHARACTER SET 'utf8'");

if(!mysqli_set_charset($connect, "utf8")){
    printf("Error: ".mysqli_error($connect));
}
