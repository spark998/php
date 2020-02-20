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
	<form action="#" method="get">
		<input value="<?=$num1?>" type="text" name="num1">
		<select name="operation">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input value="<?=$num2?>" type="text" name="num2">
		<input type="submit" value="=">
		<input type="text" readonly value="<?=$res?>" size="30">
	
	</form>
</body>
</html>