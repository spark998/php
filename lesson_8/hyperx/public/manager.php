<?php include_once "../controllers/basketControl.php";
	  include_once "../controllers/managerControl.php";
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
		<div class="order-ditail">
		<?php
			if (isset($goodsOrder)) :?>
			<div class="table-wrap">
				<table class="cart-table">
					<thead>
						<tr>
							<th></th>
							<th>Название</th>
							<th>Количество</th>
							<th>Цена</th>
							<th>Сумма</th>
						</tr>
					</thead>
					<tbody>
				<?php
					foreach ($goodsOrder as $good):?>
						<tr class="item-product">
							<td class="cart-cell-img">
								<img src="<?= $good['imgName'];?>" alt="photo">
							</td>
							<td class="cart-cell-title">
								<div class="cart-cell-title__uk">
									<?= $good['nameGoods'] ?>
								</div>
							</td>
							<td class="cart-cell-quantity">
									<?=$good['count'];?>
							</td>
							<td class="cart-cell-quantity">
									<?= $good['price'] ?>
							</td>
							<td class="cell-price">
								<span><?= sumBasketRow($good['count'], $good['price'])?></span>
								<span>₽</span>
							</td>
						</tr>
					<?php $totalSum[] = sumBasketRow($good['count'], $good['price']);?>
				<?php endforeach;?>
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
			</div>
		<?php endif;?>
		</div>
		<a href="manager.php" class="button-primary">Обновить стол заказов</a>
	<?php
		if (isset($clientsInfo)) :?>
		<div class="basket-content">
			<div class="basket-form">
				<div class="table-wrap__order">
					<table class="cart-table">
						<thead>
							<tr>
								<th>№</th>
								<th>Заказ</th>
								<th>Сумма к оплате</th>
								<th>Время заказа</th>
								<th>Способ оплаты</th>
								<th>Доставка/Самовывоз</th>
								<th>Имя клиента</th>
								<th>Телефон</th>
								<th>Адрес</th>
								<th>Комментарий</th>
							</tr>
						</thead>
						<tbody>
					<?php
						foreach ($clientsInfo as $client):?>
							<tr class="item-product">
								<td class="cart-cell-img">
									<?=$client['id']?>
								</td>
								<td class="cart-cell-img">
									<form action="manager.php" method="POST" enctype="multipart/form-data">
										<input type="hidden"  name="idClient" value="<?=$client['id']?>">
										<input type="submit" name="showOrder" value="Детали заказа">
									</form>
								</td>
								<td class="cart-cell-title">
									<div class="cart-cell-title__uk">
										<div>
											<span><?=$client['orderAmount']?> ₽</span>
										</div>
									</div>
								</td>
								<td class="cart-cell-quantity">
									<?=$client['date']?>
								</td>
								<td class="cell-price">
									<?=$client['pay']?>
								</td>
								<td class="cell-action">
									<?=$client['delivery']?>
								</td>
								<td class="cell-action">
									<?=$client['name']?>
								</td>
								<td class="cell-action">
									<?=$client['phone']?>
								</td>
								<td class="cell-action">
									<?=$client['address']?>
								</td>
								<td class="cell-action">
									<?=$client['comment']?>
								</td>
							</tr>
					<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	<?php endif;?>

	<?php
		if (!isset($clientsInfo)) : ?>		
			<div class="basket-empty">Нет заказов</div>			
		<?php endif;?>
	</div>
</body>
</html>