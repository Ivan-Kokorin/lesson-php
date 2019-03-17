<?php 
$image_info = ($_FILES['upload_file']);
if ($image_info["type"] != "image/png" && $image_info["type"] != "image/jpeg" && $image_info["type"] != "image/gif"){
	echo 'Некорректное расширение картинки. Допустимо: jpeg, png, gif';
}elseif($image_info["size"] > 1048577){
	echo 'Изображение не должно превышать 1Мб';
}else{
	$upload = "image/".rand(000000000, 999999999).".jpg";
	move_uploaded_file($_FILES['upload_file']['tmp_name'],$upload);
}
?>