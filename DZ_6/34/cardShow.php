<?php
include "server.php";

$cardFile = file_get_contents('productCard.php');

$id = $_GET['id'];

$sql = "SELECT name_product, price, img_name, path_img, title_desc, desc_card FROM product WHERE id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$imgPath = $row['path_img'] . $row['img_name'];
$title = $row['name_product'];
$price = $row['price'];
$titleDesc = $row['title_desc'];
$productDesc = $row['desc_card'];
$codProd = $_GET['id'];
$imgProd = '<img class="img-product_card" src="' . $imgPath . '" alt="photo">';

$patterns = array('/{codProd}/', '/{title}/', '/{imgProd}/', '/{price}/', '/{titleDesc}/', '/{productDesc}/');
$replace = array($codProd, $title, $imgProd, $price, $titleDesc, $productDesc);
echo preg_replace($patterns, $replace, $cardFile);
