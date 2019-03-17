<?php 
require('function.php');

$image_info = ($_FILES['upload_file']);

if ($image_info["size"] > 1048577){
	echo 'Изображение не должно превышать 1Мб';
}else{
	if ($image_info["type"] == 'image/png'){
		$upload = "image/".rand(000000000, 999999999).".png";
		$destination_path = "resize/".rand(000000000, 999999999).".png";
	}elseif ($image_info["type"] == 'image/jpeg' || $info['mime'] == 'image/jpg'){
		$upload = "image/".rand(000000000, 999999999).".jpg";
		$destination_path = "resize/".rand(000000000, 999999999).".jpg";
	}elseif ($image_info["type"] == 'image/gif'){
		$upload = "image/".rand(000000000, 999999999).".gif";
		$destination_path = "resize/".rand(000000000, 999999999).".gif";
	}else{
		exit ('Некорректное расширение картинки. Допустимо: jpeg, png, gif');
	}
	move_uploaded_file($_FILES['upload_file']['tmp_name'],$upload);
	create_thumbnail($upload, $destination_path);
	file_put_contents ( "lesson_four.php" , "\n"."<a href=$upload><img src = $destination_path class='galery_photo'></a>", FILE_APPEND | LOCK_EX);
	header("Location: http://learning.ru/");
}


?>