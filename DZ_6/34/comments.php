<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h2>Отзывы</h2>
	<form action="#" method="post">
		<p>
			<label for="name">Имя:</label> <br>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="text">Текст:</label> <br>
			<textarea name="text" id="text"></textarea>
		</p>
		<button type="submit">Отправить</button>
	</form>
	<hr>
	<?php if(!empty($messages)): ?>
		<?php foreach($messages as $message): ?>
			<div class="mesages">
				<p>Пользователь: <?=$message['name'] ?>|  </p>
				<div><?=nl2br(htmlspecialchars($message['text']))?></div>
				<p>Дата: <?=$message['date'] . '<hr>'?></p>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</body>
</html>