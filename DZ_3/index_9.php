<?php
header('Content-Type: text/html; charset=UTF-8');

function translit($str) {
	$arrTranslit = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
				'е' => 'ye', 'ё' => 'ye', 'ж' => 'j', 'з' => 'z', 'и' => 'i',
				'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
				'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
				'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
				'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
				'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
				];
	$str = (string) $str;
	$str = trim($str);
	$str = mb_strtolower($str);
	$str = strtr($str, $arrTranslit);
	$str = str_replace(' ', '_', $str);
	return $str;
  }
  
  echo translit("абвгдеё жз прс   т уфхц чшщъыьэюя");

  