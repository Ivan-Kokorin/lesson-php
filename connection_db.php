<?php
$connection = mysqli_connect('localhost', 'u0492336_kokorin', 'ZCrILiZz', 'u0492336_kokorin');

if($connection == false)
{
	echo "<p>Не удалось подключиться к базе данных!<p><br>";
	echo mysqli_connect_error();
	exit();
}
?>