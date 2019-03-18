<?php
//Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: a. Если $a и $b положительные, вывести их разность. b. Если $а и $b отрицательные, вывести их произведение. c. Если $а и $b разных знаков, вывести их сумму. Ноль можно считать положительным числом.

function lesson($a, $b){
	if ($a >= 0 && $b >=0){
		echo $a - $b;
	}else if ($a <= 0 && $b <=0){
		echo $a * $b;
	}else{
		echo $a + $b;
	};
};


//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
/*function numbers($b){ //создал рекурсивную функцию, которая будет выводить числа от $a до 15
	if ($b > 15 || $b < 0){
		return;
	}else{
		echo $b . ' ';
		numbers($b+1);
	};
};*/

$a = 1;
switch ($a){
	case 0:
		echo 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 1:
		echo 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 2:
		echo 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 3:
		echo 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 4:
		echo 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 5:
		echo 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 6:
		echo 6, 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 7:
		echo 7, 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 8:
		echo 8, 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 9:
		echo 9, 10, 11, 12, 13, 14 ,15;
		break;
	case 10:
		echo 10, 11, 12, 13, 14 ,15;
		break;
	case 11:
		echo 11, 12, 13, 14 ,15;
		break;
	case 12:
		echo 12, 13, 14 ,15;
		break;
	case 13:
		echo 13, 14 ,15;
		break;
	case 14:
		echo 14 ,15;
		break;
	case 15:
		echo 15;
		break;
};

//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function summ($a, $b){
	return $a + $b;
};
function subt($a, $b){
	return $a - $b;
};
function multipl($a, $b){
	return $a * $b;
};
function divis($a, $b){
	return $a / $b;
};


//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
function mathOperation($arg1, $arg2, $operation){
	switch ($operation){
		case 'summ':
			return summ($arg1, $arg2);
			break;
		case 'subt':
			return subt($arg1, $arg2);
			break;
		case 'multipl':
			return multipl($arg1, $arg2);
			break;
		case 'divis':
			return divis($arg1, $arg2);
			break;
		};
};
echo mathOperation(5, 8, 'multipl')
?>
<!--Посмотреть на встроенные функции PHP. Используя имеющийся
HTML шаблон, вывести текущий год в подвале при помощи встроенных
функций PHP.-->
<div class='year'><?echo date('Y');?></div>

<?php 
//С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow){ //не работает с отрицательными и дробными значениями $pow
	if ($pow == 0){
		return 1;
	}elseif (gettype($pow) == double){
		echo 'Значение степени не должно быть дробным';
	}elseif ($pow > 0){
		return $val * power($val, $pow - 1);
	}else{
		return 1/$val * power($val, $pow + 1);
	}
}

//Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.

function clock(){
	echo $hours = date('G') + 5;
	if ($hours % 10 == 1 && $hours != 11){
		echo ' час';
	}elseif ($hours % 10 >= 2 && $hours % 10 <= 4 && intdiv($hours, 10) != 1) {
		echo ' часа';
	}else{
		echo ' часов';
	}
	echo ' ' . $min = date('i');
	if ($min % 10 == 1 && $min != 11){
		echo ' минута';
	}elseif ($min % 10 >= 2 && $min % 10 <= 4 && intdiv($min, 10) != 1) {
		echo ' минуты';
	}else{
		echo ' минут';
	}
}
clock();
?>