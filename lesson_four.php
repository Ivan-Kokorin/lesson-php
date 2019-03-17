<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><? echo "$title" ?></title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<?php
	
	/*
	$file = fopen("file.txt","r");
	if(!$file){
		echo("Ошибка открытия файла");
	}else{
		$buffer = '';
		while (!feof($file)) {
			$buffer .= fread($file, 1);
		}
	echo $buffer;
	fclose($file);
	}


	$file = fopen("file.txt","a");
	if(!$file){
		echo("Ошибка открытия файла");
	}else{
		$buffer = '';
		$buffer .= fwrite($file, "<br> Проверка записи в конец файла");
	echo $buffer;
	fclose($file);
	}

	1. Создать галерею фотографий. Она должна состоять всего из одной
странички, на которой пользователь видит все картинки в
уменьшенном виде и форму для загрузки нового изображения. При
клике на фотографию она должна открыться в браузере в новой
вкладке. Размер картинок можно ограничивать с помощью свойства
width. При загрузке изображения необходимо делать проверку на тип и
размер файла.
	*/



//create_thumbnail($path = 'image/20120522050128!Comic_Book_Guy.png');
//$path = 'image/20120522050128!Comic_Book_Guy.png';

?>

<form enctype="multipart/form-data" method="POST" action="/handle_image.php">
	<input type="file" name="upload_file" multiple>
	<input type="submit" value="Отправить"></p>
</form>


<a href=image/926355185.png><img src = resize/361539793.png class='galery_photo'></a>
<a href=image/270717335.png><img src = resize/55829530.png class='galery_photo'></a>
<a href=image/798690425.png><img src = resize/85787062.png class='galery_photo'></a>
<a href=image/86786553.png><img src = resize/759353275.png class='galery_photo'></a>
<a href=image/953735875.png><img src = resize/792312640.png class='galery_photo'></a>
<a href=image/392049943.png><img src = resize/438817696.png class='galery_photo'></a>