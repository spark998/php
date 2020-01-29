<?php
include "config.php";

$sql = "SELECT * FROM image";
$res = mysqli_query($connect, $sql);


$id = $_POST['id'];
$count = $_POST['count'];

$sqlUp = "UPDATE image set view_count=$count where id=$id";
mysqli_query($connect, $sqlUp);








