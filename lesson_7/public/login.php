<?php include_once "../controllers/user.php"; ?>
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
		<div class="form-wrap">
		<?php
        if (isset($_SESSION[login]) && isset($_SESSION[pass])) {
            echo "Приветствем вас, " . $_SESSION[login];
        } else {
			echo $message ? $message : ""; ?>
			<form class="form-reg" action="#" method="POST" enctype="multipart/form-data">
    			<p>Логин: <input class="input" type="text" name="login" maxlength="30" placeholder="Введите Логин" required></p>
    			<p>Пароль: <input class="input" type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
    			<input class="reg-btn" type="submit" name="enter" value="Войти">
			</form>
			<?php } ?>
		</div>
	</div>
</body>
</html>