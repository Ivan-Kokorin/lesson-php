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

<a href=image/173494103.jpg><img src = resize/415541357.jpg class='galery_photo'></a>
<a href=image/761186046.png><img src = resize/487591185.png class='galery_photo'></a>
<a href=image/823431343.gif><img src = resize/62813805.gif class='galery_photo'></a>
<a href=image/449472549.gif><img src = resize/904250702.gif class='galery_photo'></a>