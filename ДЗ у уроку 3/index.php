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
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.

3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
 массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
 (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.

5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
 Попробовать его реализовать.
7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}

8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и
 замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
*/

$a = 0;
while($a <= 100){
	if($a % 3 == 0){
		echo $a . " ";
	};
	$a++;
};




echo "<br><hr>";
function exSecond($b){
	$num = 0;
	echo $num++ . " - ноль<br>";
	do{
		if($num % 2 == 1){
			echo $num . " - нечетное число.<br>";
		}else{
			echo $num . " - четное число.<br>";
		};
		$num++;
	} while ($num <= $b);
};
exSecond(16);
echo "<br><hr>";

$cities = [
"Московская область" => ["Москва", "Зеленоград", "Клин"],
"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
];

foreach ($cities as $key => $value){
	echo $key . ":<br>";
	foreach($value as $key2 => $value2){
		echo $value2 . ", ";
	};
	echo "<br>";
};
echo "<br><hr>";

/*
$arrTranslit = ["а"=> "a", "б"=> "b", "в"=> "v", "г"=> "g", "д"=> "d", "е"=> "e", "ё"=> "yo", "ж"=> "zh", "з"=> "z", "и"=> "i", "й"=> "y", "к"=> "k", "л"=> "l", "м"=> "m", "н"=> "n", "о"=> "o", "п"=> "p", "р"=> "r", "с"=> "s", "т"=> "t", "у"=> "u", "ф"=> "f", "х"=> "kh", "ц"=> "ts", "ч"=> "ch", "ш"=> "sh", "щ"=> "shch", "ъ"=> "`", "ы"=> "y", "ь"=> "'", "э"=> "e", "ю"=> "yu", "я"=> "ya", ];
function translit ($word){
	echo $world;
	$replace = "jgjg";
	for($i = 0; $i < count($word); $i++){
	echo str_ireplace($i, $replace, $word);
	};
};

*/

?>
</div>
</div>

</body>
</html>