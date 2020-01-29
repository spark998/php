<?php 
include "server.php";
?>

<div class="title">
	<h3><?=$_GET['name']?></h3>
</div>
<div class="img">
	<img id="img_<?=$_GET['id']?>" width="1500" src="<?=$_GET['path'] . $_GET['name']?>">
	<p>Просмотры: <?=$_GET['count'] ?></p>
</div>

