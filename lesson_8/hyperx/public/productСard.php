<?php include_once "../controllers/product.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
<?php include "../templates/header.php";?>

<?php
$good = getOneItem($connect, $id, 'goods');
?>
	<div class="container">
		<div class="product-content">
			<div class="product-content__left">
				<div class="img-box">
					<img class="product-img" src="<?=$good['imgName']?>" alt="photo">
				</div>
			</div>
			<div class="product-content__right">
				<div class="product-head__text">
					<h1 class="product-head__title"> <span><?=$good['nameGoods']?></span> </h1>
					<p class="product-head__lead">
						<?=$good['description']?>	
					</p>
					<hr>
					<div class="product-head__purchase">
						<div class="product-head__price">
							<span>Цена</span>
							<span><?=$good['price']?></span>
							<span>₽</span>
						</div>
						<a class="product-head__btn" href="basket.php?getBasketGoods=1&addBasketid=<?=$good['id']?>">Купить</a>
					</div>
					<hr>
					<div class="product-head__condition">
						Изготовление на заказ, сроки 7-10 дней
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>