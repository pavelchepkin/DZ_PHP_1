<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">

<div class="content">
<?php
/*
1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.
2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
 $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
 и вернуть полученное значение (использовать switch).
5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/
echo "<h2 style=\"background: #bdfff3; color: #a654ff\">Нажми F5, чтобы сменить числа.";


$a = rand(-100,100);
$b = rand(-100,100);
echo "<h3>#1</h3><br>Пусть первая переменная равна $a, а вторая $b (от -100 до +100)<br>";
if($a >= 0 && $b >= 0){
	$diff = $a - $b;
	echo "<h2>Разность: $diff.</h2><br>";
} else if($a < 0 && $b < 0){
	$mult = $a * $b;
	echo "<h2>Произведение: $mult.</h2><br>";
} else {
	$sum = $a + $b;
	echo "<h2>Сумма: $sum.</h2><br>";
};
$c = rand(0,15);
switch($c){
	case 0:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 1:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>1 2 3 4 5 6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 2:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>2 3 4 5 6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 3:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>3 4 5 6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 4:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>4 5 6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 5:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>5 6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 6:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>6 7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 7:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>7 8 9 10 11 12 13 14 15</h2>";
	break;
	case 8:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>8 9 10 11 12 13 14 15</h2>";
	break;
	case 9:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>9 10 11 12 13 14 15</h2>";
	break;
	case 10:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>10 11 12 13 14 15</h2>";
	break;
	case 11:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>11 12 13 14 15</h2>";
	break;
	case 12:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>12 13 14 15</h2>";
	break;
	case 13:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>13 14 15</h2>";
	break;
	case 14:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>14 15</h2>";
	break;
	default:
	echo "<h3>#2</h3><br>Переменная равна $c:<br><h2>15</h2>";
};

echo "<h3>#3</h3><br>Значения переменных взяты из задания #1.<br><h2>Сумма: " . sum($a,$b) . "<br>Разность: " . diff($a,$b) . "<br>Умножение: " . mult($a,$b) . "<br>Деление: " . div($a,$b) . "</h2><br>";

function sum($num_a, $num_b){
	return $num_a + $num_b;
};
function diff($num_a, $num_b){
	return $num_a - $num_b;
};
function mult($num_a, $num_b){
	return $num_a * $num_b;
};
function div($num_a, $num_b){
	return $num_a / $num_b;
};


$operationPointer = rand(1,4);
if($operationPointer == 1){
	$operation = "+";
}else if($operationPointer == 2){
	$operation = "-";
}else if($operationPointer == 3){
	$operation = "*";
}else{
	$operation = "/";
};

echo "<h3>#4</h3><br><h2>$a $operation $b = " . mathOperation($a, $b, $operation) . "</h2>";

function mathOperation($arg1, $arg2, $operation){
	switch($operation){
		case '+' :	
			return $arg1 + $arg2;
		case '-' :	
			return $arg1 - $arg2;
		case '*' :	
			return $arg1 * $arg2;
		default :	
			return $arg1 / $arg2;
	};
};

$randVal = rand(1,10);
$randPow = rand(1,6);

echo "<h3>#6</h3><br><h2>Число $randVal в степени $randPow = " . power($randVal, $randPow) . "</h2>";

function power($val, $pow){
    if($pow !== 0) {
        return $val * power($val, $pow - 1);
    } 
    return 1;
}

$timeH = date (g);
$timeM = date (i);
$timeS = date (s);
$timeY = date (Y);
/*
$timeH = 11;
$timeM = 11;
$timeS = 11;
*/
$worldTime = ["час", "часа", "часов", "минута", "минуты", "минут", "секуда", "секунды", "секунд"];


function statusH ($timeH, $worldTime){
	if($timeH % 10 == 1 && $timeH != 11){
		return "$timeH $worldTime[0]";
	}else if($timeH % 10 >= 2 && $timeH % 10 <= 4){
		return "$timeH $worldTime[1]";
	}else{
		return "$timeH $worldTime[2]";
	}
};
function statusM ($timeM, $worldTime){
	if($timeM % 10 == 1 && $timeM != 11){
		return "$timeM $worldTime[3]";
	}else if($timeM % 10 >= 2 && $timeM % 10 <= 4){
		return "$timeM $worldTime[4]";
	}else{
		return "$timeM $worldTime[5]";
	}
};
function statusS ($timeS, $worldTime){
	if($timeS % 10 == 1 && $timeS != 11){
		return "$timeS $worldTime[6]";
	}else if($timeS % 10 >= 2 && $timeS % 10 <= 4){
		return "$timeS $worldTime[7]";
	}else{
		return "$timeS $worldTime[8]";
	}
};
?>
</div>
<footer class= footer>
<div class="time">
<?php
echo "<h2>Задания #5 и #7: Сейчас " . statusH($timeH, $worldTime) . " " . statusM($timeM, $worldTime) . " " . statusS($timeS, $worldTime) . " $timeY г.</h2>";
?>
</div>
</footer>
</div>

</body>
</html>