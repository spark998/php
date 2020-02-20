<?php
$path = "images/" . $_FILES['photo']['name'];
$pathBig = "images_big/" . $_FILES['photo']['name'];
$loadFile = $_FILES['photo']['tmp_name'];

function get_images($dir){
	$files = scandir($dir);
	unset($files[0], $files[1]);
	return $files;
}


$filename =  $loadFile;
if (!empty($filename)){

	$info   = getimagesize($filename);
	$width  = $info[0];
	$height = $info[1];
	$type   = $info[2];
	switch ($type) { 
		case 1: 
			$img = imageCreateFromGif($filename);
			imageSaveAlpha($img, true);
			break;					
		case 2: 
			$img = imageCreateFromJpeg($filename);
			break;
		case 3: 
			$img = imageCreateFromPng($filename); 
			imageSaveAlpha($img, true);
			break;
	}
	
	$w = 400;
	$h = 0;
	if (empty($w)) {
		$w = ceil($h / ($height / $width));
	}
	if (empty($h)) {
		$h = ceil($w / ($width / $height));
	}
	$tmp = imageCreateTrueColor($w, $h);
	if ($type == 1 || $type == 3) {
		imagealphablending($tmp, true); 
		imageSaveAlpha($tmp, true);
		$transparent = imagecolorallocatealpha($tmp, 0, 0, 0, 127); 
		imagefill($tmp, 0, 0, $transparent); 
		imagecolortransparent($tmp, $transparent);    
	}   
	$tw = ceil($h / ($height / $width));
	$th = ceil($w / ($width / $height));
	if ($tw < $w) {
		imageCopyResampled($tmp, $img, ceil(($w - $tw) / 2), 0, 0, 0, $tw, $h, $width, $height);        
	} else {
		imageCopyResampled($tmp, $img, 0, ceil(($h - $th) / 2), 0, 0, $w, $th, $width, $height);    
	} 
	$img = $tmp;
	
	switch ($type) {
		case 1:
			imageGif($img, $path);
			break;			
		case 2:
			imageJpeg($img, $path, 100);
			break;			
		case 3:
			imagePng($img, $path);
			break;
	}
	imagedestroy($img);

	move_uploaded_file($loadFile, $pathBig);
}