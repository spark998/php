<?php
include "server.php";
$dir = "images/";
$dirBig = "images_big/";
$arrImg = get_images($dir);
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
					<a class="img-link" href="?name=<?=$file?>&mod=#modal">
						<img class="img" src="<?=$dir . $file?>">
					</a>
				</div>	
		<?php
			endforeach;?>
		</div>

		<div id="modal" class="overlay fade">
			<div class="popup">
				<div class="popup-close">&times;</div>
				<div class="popup-title">
					<?=$_GET['name']?>
				</div>
				<div class="img-popup">
					<img class="img" src="<?=$dirBig . $_GET['name']?>">
				</div>
			</div>
		</div>
		
		<form action="" method="post" enctype ="multipart/form-data">
			<input type="file" name="photo">
			<input type="submit" value="Сохранить">
		</form>
	</div>
		<script src="script.js"></script>
</body>
</html>