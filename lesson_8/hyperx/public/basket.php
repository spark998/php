<?php include_once "../controllers/basketControl.php";
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
		<h1 class="basket-title">Корзина</h1>
		<?php
			if (isset($goodsBasket)) :?>
		<div class="basket-content">
			<div class="basket-form">
				<div class="table-wrap">
					<table class="cart-table">
						<thead>
							<tr>
								<th colspan="2">Товар</th>
								<th>Количество</th>
								<th colspan="2">Цена</th>
							</tr>
						</thead>
						<tbody>
					<?php
						foreach ($goodsBasket as $good):?>
							<tr class="item-product">
								<td class="cart-cell-img">
									<img src="<?= $good['imgGood'] ?>" alt="photo">
								</td>
								<td class="cart-cell-title">
									<div class="cart-cell-title__uk">
										<?= $good['nameGood'] ?>
									</div>
								</td>
								<td class="cart-cell-quantity">
									<div class="cart-quantity">
										<a class="plus" href="basket.php?getBasketGoods=1&addBasketid=<?=$good['good_id']?>">+</a>
										<input class="uk-input" value="<?= $good['count'] ?>" type="text">
										<a class="disabled" href="basket.php?getBasketGoods=1&deleteToBasketid=<?=$good['good_id']?>">-</a>
									</div>
								</td>
								<td class="cell-price">
									<div>
										<span><?= sumBasketRow($good['count'], $good['price'])?></span>
										<span>₽</span>
									</div>
								</td>
								<td class="cell-action">
									<a class="remove-item" href="basket.php?getBasketGoods=1&deleteToBasketRow=<?=$good['id']?>">
										<span>X</span>
									</a>
								</td>
							</tr>
						<?php $totalSum[] = sumBasketRow($good['count'], $good['price']); ?>
					<?php endforeach; ?>
				
							<tfoot>
								<tr>
									<th colspan="5">
										<div class="total-price">
											Итого:
											<span><?= sumBasketTotal($totalSum)?></span>
											<span>₽</span>
										</div>
									</th>
								</tr>
							</tfoot>
						</tbody>
					</table>
					<div class="form-btn">
						<a class="form-fields-btn product-head__btn" href="order.php?getBasketGoods=1">
							Перейти к оформлению 
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif;?>

	<?php
		if (!isset($goodsBasket)) : ?>		
			<div class="basket-empty">Ваша корзина пуста</div>			
		<?php endif;?>

	</div>
</body>
</html>