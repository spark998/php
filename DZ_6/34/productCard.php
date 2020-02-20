<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<header>
		<h1 class="title">PC Сomponents</h1>
	</header>
	<div class="container">
		<div class="product_card">
			<div class="title-product_card">
				<h2>{title}</h2>
			</div>
			<span class="product-id_card">Код товара: {codProd}</span>

			<div class="flex-wrap">
				<div class="img-box img-box_card">
					{imgProd}
				</div>
				<div class="wrap">
					<div class="product-price product-price_card">
						{price} p
					</div>
					<a class="btn" href="#">купить</a>
				</div>
			</div>

			<div class="product-info product-info_card">
				<h3>{titleDesc}</h3>
				<div class="description_card">
					{productDesc}
				</div>
			</div>
		</div>
	</div>
</body>
</html>