<?php 
include_once "../controllers/adminControl.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="../js/main.js"></script>
	<title>Document</title>
</head>
<body>
<?php include "../templates/header.php";?>
	<div class="container">

		<div class="section-pc__grid">
			<form class="form-reg" action="#" method="POST" enctype="multipart/form-data">
				<div>
					<p>Фото:</p>
					<div class="lineup-product__image">
						<a class="uk-img__link" href="№">
							<img class="uk-img" src="<?=$goodEdit['imgName']?>" alt="photo">
						</a>
					</div>
					<input class="input-file" type="file" name="photo">
				</div>
				<div>
					<p>Название товара: </p>
					<input class="input" type="text" name="nameGood" maxlength="30" value="<?=$goodEdit['nameGoods']?>">
				</div>
				<div>
					<p>Описание:</p>
					<textarea class="input" type="text" name="description" rows="10" cols="50" ><?=$goodEdit['description']?></textarea>
				</div>
				<div>
				<p>Цена:</p>
				<input class="input" type="text"  name="price" value="<?=$goodEdit['price']?>">
				</div>
				<?php 
					if ($_GET['edit']) {
						echo '<input class="reg-btn" type="submit" name="goodEdit" value="Сохранить изменения">';
					} else {
						echo '<input class="reg-btn" type="submit" name="addNewGood" value="Добавить товар">';
					}
				?>
			</form>
			<hr>
			<div class="first-column">
				<?php
				if (isset($goods))
					foreach ($goods as $good) : ?>
					<div class="lineup-product">
						<div class="lineup-product__image">
							<a class="uk-img__link" href="productСard.php?id=<?=$good['id']?>">
								<img class="uk-img" src="<?=$good['imgName']?>" alt="evo">
							</a>
						</div>
						<div class="text-emphasis"><?=$good['nameGoods']?></div>
						<div class="text-price">Цена <?=$good['price']?> ₽</div>
						<div class="lineup-product__buttons">
							<a href="admin.php?edit=<?= $good['id']?>" class="button-primary">Редактировать</a>
						</div>
						<div class="lineup-product__buttons">
							<a onclick="adminDelGood(<?= $good['id']?>)" href="admin.php" class="button-primary">Удалить</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		
	</div>
	
</body>
</html>