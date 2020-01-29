<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
	function f(id, count){
		var count = count + 1;
		var query = "id="+id+"&count="+count;
		$.ajax({
			type: "POST",
			url: "server.php",
			data: query
		});
	}
</script>
<?php
include "server.php";
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
			while($data = mysqli_fetch_assoc($res)):?>
			<div class="img-box">
				<a onclick="f(<?=$data['id']?>, <?=$data['view_count']?>)" target="_blank" class="img-link" href="show.php?id=<?=$data['id']?>&path=<?=$data['path']?>&name=<?=$data['name']?>&count=<?=$data['view_count']?>">
					<img id="img_<?=$data['id']?>" src="<?=$data['path'] . $data['name']?>">
				</a>
			</div>	
			<?php
				endwhile;?>
		</div>
		
		<form action="#" method="post" enctype ="multipart/form-data">
			<input type="file" name="photo">
			<input type="submit" value="Сохранить">
		</form>
	</div>
</body>
</html>