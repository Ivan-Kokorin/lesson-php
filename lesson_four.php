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


function create_thumbnail($path){
	$destination_path = 'resize/20120522050128!Comic_Book_Guy.png';
	$info = getimagesize($path);
	$oldwidth = $info[0];
	$oldheight = $info[1];
	$newwidth = $info[0] / 2;
	$newheight = $info[1] / 2;
	if ($info['mime'] == 'image/png') {
		$src = imagecreatefrompng($path);
		$destination_resource=imagecreatetruecolor($newwidth, $newheight);
		imagealphablending($destination_resource, false);
		imagesavealpha($destination_resource, true);
		imagecopyresampled($destination_resource, $src, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
		imagepng($destination_resource, $destination_path);
		}
	}
//create_thumbnail($path = 'image/20120522050128!Comic_Book_Guy.png');
//$path = 'image/20120522050128!Comic_Book_Guy.png';

?>

<form enctype="multipart/form-data" method="POST" action="/handle_image.php">
	<input type="file" name="upload_file" multiple accept="image/jpeg,image/png">
	<input type="submit" value="Отправить"></p>
</form>
