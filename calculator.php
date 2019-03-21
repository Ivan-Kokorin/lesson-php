<?php
	$a = $_POST['number_one'];
	$b = $_POST['number_two'];
	if (isset($_POST['summ'])){
		$res = $a + $b;
	}elseif (isset($_POST['subtraction'])) {
		$res = $a - $b;
	}elseif (isset($_POST['multiply'])) {
		$res = $a * $b;
	}elseif (isset($_POST['divis'])) {
		if ($b == 0){
			$res = 'На ноль делить нельзя!';
		}else{
			$res = $a / $b;
		}
	}else{
		'Ошибка! Неверное введённые данные';
	}
	echo "<h2> Результат: " . $res;
?>