<?php
include "server.php";
?>
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
		<div class="container">
			<h1 class="title">PC Сomponents</h1>
			<a class="comment" target="_blank" href="comments.php">Отзывы</a>
		</div>
	</header>
	<div class="container">
		<div class="product-list">
		<?php	
			while($data = mysqli_fetch_assoc($res)):?>
			<div class="product">
				<div class="img-box">
					<a class="product-link" target="_blank" href="cardShow.php?id=<?=$data['id']?>">
						<img class="img-product" src="<?=$data['path_img'] . $data['img_name']?>" alt="photo">
					</a>
					<span class="product-id"><?=$data['id']?></span>
				</div>
				<div class="product-info">
					<div class="title-product">
						<a class="ui-link" target="_blank" href="cardShow.php?id=<?=$data['id']?>"><?=$data['name_product']?></a>
					</div>
					<div class="description">
						<?=$data['description']?>
					</div>
				</div>
				<div class="product-price">
					<?=$data['price']?> p
				</div>
			</div>
			<?php
				endwhile;?>
		</div>
	</div>
</body>
</html>