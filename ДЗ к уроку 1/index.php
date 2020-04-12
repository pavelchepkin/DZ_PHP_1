<?php
$h1 = "<h1>Первая ДЗ на PHP в Notepad++</h1><br>";
$title = "<title>title из переменной</title>";
$dateOfYear = date("d\-F\-Y G\:i");
$nam1 = 25;
$nam2 = 46;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<?php 
		echo $h1;
	?>
</head>
<body>
    <?php
		echo $title;
		echo "Дата и время на данный момент:<br> $dateOfYear <br>";
		echo "__________________________________________<br>";
		echo "Первая переменная - $nam1, <br> Вторая переменная - $nam2.<br><br>";
		echo "Меняем значения переменных местами.<br>";
		echo '$nam1 -= $nam2 = ($nam1 += $nam2) - $nam2<br><br>';
		
		echo "Первая теперь - $nam1, <br> А вторая - $nam2.<br>";
	?>
</body>
</html>