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
		<div class="basket-empty">Ваша корзина пуста</div>
	
		<div class="basket-content">
			<form class="basket-form" action="#" method="POST" enctype="multipart/form-data">
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
							<tr class="item-product">
								<td class="cart-cell-img">
									<img src="img/1.jpg" alt="photo">
								</td>
								<td class="cart-cell-title">
									<div class="cart-cell-title__uk">
										HYPERPC EARLKASE
									</div>
								</td>
								<td class="cart-cell-quantity">
									<div class="cart-quantity">
										<a class="disabled" href="#">-</a>
										<input class="uk-input" value="1" type="text">
										<a class="plus" href="#">+</a>
									</div>
								</td>
								<td class="cell-price">
									<div>
										<span>112000</span>
										<span>₽</span>
									</div>
								</td>
								<td class="cell-action">
									<a class="remove-item" href="#">
										<span>X</span>
									</a>
								</td>
							</tr>
							<tr class="item-product">
								<td class="cart-cell-img">
									<img src="img/1.jpg" alt="photo">
								</td>
								<td class="cart-cell-title">
									<div class="cart-cell-title__uk">
										HYPERPC EARLKASE
									</div>
								</td>
								<td class="cart-cell-quantity">
									<div class="cart-quantity">
										<a class="disabled" href="#">-</a>
										<input class="uk-input" value="1" type="text">
										<a class="plus" href="#">+</a>
									</div>
								</td>
								<td class="cell-price">
									<div>
										<span>112000</span>
										<span>₽</span>
									</div>
								</td>
								<td class="cell-action">
									<a class="remove-item" href="#">
										<span>X</span>
									</a>
								</td>
							</tr>
							<tfoot>
								<tr>
									<th colspan="5">
										<div class="total-price">
											Итого:
											<span>112000</span>
											<span>₽</span>
										</div>
									</th>
								</tr>
							</tfoot>
						</tbody>
					</table>
					<div class="form-btn">
						<a class="form-fields-btn product-head__btn" href="#">
							Перейти к оформлению 
						</a>
					</div>
				</div>
			</form>
		</div>
	
	</div>
</body>
</html>