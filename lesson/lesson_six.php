<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Calculator</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<div class="calc">
			<form action="" method="post">
				<input type="number" name="number_one" class="calc__result" placeholder="Первое число" required>
				<input type="number" name="number_two" class="calc__result" placeholder="Второе число" required>
				<div class="calc__button-block">
					<div class="calc__button">1</div>
					<div class="calc__button">2</div>
					<div class="calc__button">3</div>
					<input type="submit" class="calc__button" name="summ" value="+">
					<div class="calc__button">4</div>
					<div class="calc__button">5</div>
					<div class="calc__button">6</div>
					<input type="submit" class="calc__button" name="subtraction" value="-">
					<div class="calc__button">7</div>
					<div class="calc__button">8</div>
					<div class="calc__button">9</div>
					<input type="submit" class="calc__button" name="multiply" value="*">
					<div class="calc__button">=</div>
					<div class="calc__button">0</div>
					<input type="reset" class="calc__button" value="C">
					<input type="submit" class="calc__button" name="divis" value="/">
				</div>
			</form>
		</div>
		<?php
			require_once('calculator.php');
		?>
			
	</body>