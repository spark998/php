<?php include_once "../controllers/basketControl.php";
?>
<header class="header">
		<div class="container">
			<div class="wrapper">
				<div class="navbar-left">
					<div class="navbar__logo">HYPERPC</div>
					<ul class="navbar-nav">
						<li>
							<a href="index.php" class="navbar-nav_link">КОМПЬЮТЕРЫ</a> 
						</li>
						<li>
							<a href="#" class="navbar-nav_link">НОУТБУКИ</a> 
						</li>
						<li>
							<a href="#" class="navbar-nav_link">АКСЕССУАРЫ</a> 
						</li>
						<li>
							<a class="navbar-nav_link" target="_blank" href="comments.php">Отзывы</a>
						</li>
					</ul>
				</div> 
				<div class="navbar-right">
					<a class="cart-link" href="basket.php?getBasketGoods=1">
						<span class="cart-link__sum"><?=$countGoodsOrder?></span> 
						<span class="cart-link__lbl">Корзина</span>
					</a>
					<?php
                if (isset($_SESSION[login]) && isset($_SESSION[pass])) {
					if ($_SESSION[login] == 'admin') {
						echo "<a class='login' href='admin.php?action=profile'>Админка</a>";
						echo "<a class='login' href='manager.php'>Управление заказами</a>";
					} else {
						echo "<a class='login' href='login.php?action=profile'>Личный кабинет</a>";
					}
					echo "<a class='login' href='login.php?action=logout'>Выйти " . $_SESSION[login] . "</a>";
				} else {
					echo "<a class='login' href='login.php'>Войти</a>";
                    echo "<a class='register' href='reg.php'>Регистрация</a>";
				} ?>
					
				</div>
			</div>
		</div>
	</header>