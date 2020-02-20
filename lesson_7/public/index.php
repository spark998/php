<?php
	include_once "../controllers/product.php"; 
?>
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
	<div class="container">
		<div class="section-pc">
			<div class="section-text">
				<h2 class="section-text__title">Модельный ряд: каждый HYPERPC заряжен на сотни FPS</h2>
				<p class="section-text__desc">
					Выбирайте готовую конфигурацию для начинающих геймеров, опытных стримеров или профессиональных киберспортсменов.
				</p>
			</div>
			<div class="subnav">
				<div class="subnav-head">
					<div class="subnav-title">Тип компьютера</div>
					<ul class="subnav-list">
						<li class="subnav-item">
							<a href="#" class="subnav-item__link">ОПТИМАЛЬНЫЕ</a> 
						</li>
						<li class="subnav-item">
							<a href="#" class="subnav-item__link">ПРОДВИНУТЫЕ</a> 
						
						</li>
						<li class="subnav-item">
							<a href="#" class="subnav-item__link">ЭКСТРЕМАЛЬНЫЕ</a>
						</li>
						<li class="subnav-item">
							<a href="#" class="subnav-item__link">БЕСШУМНЫЕ</a>
						</li>
						<li class="subnav-item">
							<a href="#" class="subnav-item__link">ЭКСКЛЮЗИВ</a>
						</li>
						<li class="subnav-item">
							<a href="#" class="subnav-item__link">СТОЛ-КОМПЬТЕР</a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="section-pc__grid">
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
								<a href="productСard.php?id=<?=$good['id']?>" class="button-primary">Узнать больше</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>