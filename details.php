<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><? echo "$title" ?></title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<?php
include('connection_db.php');
include('function.php');
$id_image = $_GET['id'];
$res_query = mysqli_query($connection, "SELECT * FROM `main_galery` WHERE `id_image` = '$id_image'");
$res_fetch = mysqli_fetch_assoc($res_query);
$counter_num = $res_fetch["visit_counter"] + 1; // добавляем "просмотр" к счётчику
$update_counter = mysqli_query($connection, "UPDATE `main_galery` SET `visit_counter` = '$counter_num'WHERE `id_image` = '$id_image'");
$link_image = $res_fetch['link_image'];
mysqli_close($connection);
?>
<div class='detail-vision'>
	<img class='detail-vision__image_detail' src=<?php echo $link_image; ?>>
	<p class="detail-vision__counter"><?php echo $counter_num . ' ' . word_visit_form($counter_num)?></p>
</div>
</body>