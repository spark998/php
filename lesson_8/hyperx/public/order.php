<?php include_once "../controllers/basketControl.php";?>
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
		<h1 class="basket-title">Ваш заказ</h1>
	
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
										<a class="plus" href="order.php?getBasketGoods=1&addBasketid=<?=$good['good_id']?>">+</a>
										<input class="uk-input" value="<?= $good['count'] ?>" type="text">
										<a class="disabled" href="order.php?getBasketGoods=1&deleteToBasketid=<?=$good['good_id']?>">-</a>
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
											Сумма к оплате:
											<span><?= sumBasketTotal($totalSum)?></span>
											<span>₽</span>
										</div>
									</th>
								</tr>
							</tfoot>
						</tbody>
					</table>
					<form class="formClientInfo" action="orderEnd.php" method="POST" enctype="multipart/form-data">
						<div>
							<label for="delivery" class="">Способ доставки</label>
							<input type="radio" checked name="delivery" value="Самовывоз"> <span> Самовывоз</span>
							<input type="radio" name="delivery" value="Доставка"> <span> Доставка</span>
						</div>
						<div>
							<label for="inputName" class="">Имя</label>
            			    <input class="input" required type="text" name="name" id="inputName" placeholder="Введите имя">
						</div>
						<div>
							<label for="inputPhone" class="">Телефон</label>
            			    <input class="input" required type="tel" name="phone" placeholder="Введите номер телефона">
						</div>
						<div>
						<label for="inputtypepay" class="">Способ оплаты</label>
							<select class="input" name="pay" id="inputtypepay">
								<option value="Наличные">Наличные</option>
								<option value="Безналичный">Безналичный</option>
							</select>
						</div>
						<div>
							<label for="inputAddress" class="">Адрес</label>
            			    <input class="input" required type="text" name="address" placeholder="Адрес доставки"></input>
						</div>
						<div>
							<label for="inputComment" class="">Комментарий</label>
            			    <textarea class="input" type="text" name="comment" placeholder="Комментарий к заказу"></textarea>
						</div>
						<div>
							<input type="hidden"  name="orderAmount" value="<?=sumBasketTotal($totalSum)?>">
							<input class=" form-fields-btn product-head__btn" type="submit" name="payOrder" value="Заказать">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>