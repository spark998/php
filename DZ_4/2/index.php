<?php
require_once "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Gallery</title>
</head>
<body>
	<header class="header">
		<div class="container">
			<h1>Gallery</h1>
		</div>
	</header>
	<div class="container">
		<div class="flex-wrap">
		<?php
			foreach($arrImg as $file):?>
				<div class="img-box">
					<a target="_blank" class="img-link" href="show.php?name=<?=$file?>">
						<img class="img" src="<?=$dir . $file?>">
					</a>
				</div>	
		<?php
			endforeach;?>
		</div>
		
		<form action="" method="post" enctype ="multipart/form-data">
			<input type="file" name="photo">
			<input type="submit" value="Сохранить">
		</form>
	</div>
</body>
</html>