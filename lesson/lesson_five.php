<?php
	

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