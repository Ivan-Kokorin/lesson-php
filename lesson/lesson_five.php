<?php
	include('connection_db.php');

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title><? echo "$title" ?></title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<form enctype="multipart/form-data" method="POST" action="/handle_image_db.php">
	<input type="file" name="upload_file" multiple>
	<input type="submit" value="Отправить"></p>
</form>

<?php
	$res_query = mysqli_query($connection, "SELECT * FROM `main_galery` ORDER BY `visit_counter` DESC");
	while($row = mysqli_fetch_assoc($res_query))
		echo '<a href="details.php?id=' . $row['id_image'] . '"><img class="galery_photo" src=' . $row['link_image_resize'] . ' alt=' . $row['name_image'] . '></a>' . "\n";
	mysqli_close($connection);
?>