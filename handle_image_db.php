<?php 
require('function.php');
include('connection_db.php');

$image_info = ($_FILES['upload_file']);

if ($image_info["size"] > 1048577){
	echo 'Изображение не должно превышать 1Мб';
}else{
	if ($image_info["type"] == 'image/png'){
		$upload = "image/".rand(000000000, 999999999).".png";
		$destination_path = "resize/".rand(000000000, 999999999).".png";
	}elseif ($image_info["type"] == 'image/jpeg' || $info['type'] == 'image/jpg'){
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
	$name_image = basename($upload);
	$name_image_resize = basename($destination_path);
	$link_name = "image/" . $name_image;
	$link_name_resize = "resize/" . $name_image_resize;
	$size = $image_info["size"];
	$result = mysqli_query($connection, "INSERT INTO `main_galery` (`name_image`, `link_image`, `link_image_resize`, `size`) VALUES ('$name_image', '$link_name', '$link_name_resize', '$size')");
	mysqli_close($connection);
	header("Location: http://ikokorin.studymmit.ru/");
}

?>