<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #ebebeb;
            overflow-x: hidden;
            text-align: center;
        }

        header {
            width: 100%;
            height: 50px;
            background-color: #f44355;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        header>nav>div {
            float: left;
            width: 16.6666%;
            height: 100%;
            position: relative;
        }

        header>nav>div>a {
            text-align: center;
            width: 100%;
            height: 100%;
            display: block;
            line-height: 50px;
            color: #fbfbfb;
            transition: background-color 0.2s ease;
            text-transform: uppercase;
        }

        header>nav>div:hover>a {
            background-color: rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        header>nav>div>div {
            display: none;
            overflow: hidden;
            background-color: white;
            min-width: 200%;
            position: absolute;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            padding: 10px;
        }

        header>nav>div:not(:first-of-type):not(:last-of-type)>div {
            left: -50%;
            border-radius: 0 0 3px 3px;
        }

        header>nav>div:first-of-type>div {
            left: 0;
            border-radius: 0 0 3px 0;
        }

        header>nav>div:last-of-type>div {
            right: 0;
            border-radius: 0 0 0 3px;
        }

        header>nav>div:hover>div {
            display: block;
        }

        header>nav>div>div>a {
            display: block;
            float: left;
            padding: 8px 10px;
            width: 46%;
            margin: 2%;
            text-align: center;
            background-color: #f44355;
            color: #fbfbfb;
            border-radius: 2px;
            transition: background-color 0.2s ease;
        }

        header>nav>div>div>a:hover {
            background-color: #212121;
            cursor: pointer;
        }

        h1 {
            margin-top: 100px;
            font-weight: 100;
        }

        p {
            color: #aaa;
            font-weight: 300;
        }

        @media (max-width: 600px) {
            header>nav>div>div>a {
                margin: 5px 0;
                width: 100%;
            }

            header>nav>div>a>span {
                display: none;
            }
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav>
                <?php
        $menu = [
            'Главная',
            'Новости' => ['Новости спорта', 'Новости о политике', 'Новости науки'],
            'О нас',
            'Контакты'
        ];
        foreach ($menu as $key => $value) {
            if (is_array($value)) {
                echo "<div><a><span>$key</span></a><div>";
                foreach ($value as $sub => $val) {
                    echo "<a>$val</a>";
                }
                echo "</div></div>";
                continue;
            }
            echo "<div><a><span>$value</span></a></div>";
        }
        ?>
            </nav>
        </header>
        <h1>Заголовок</h1>
        <p>Текст</p>
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

foreach ($cities as $key => $val) {
	echo "$key:<br>";
	echo implode(', ', $val) . '<br>';
}
echo "<br><hr>";

function getTranslitArray()
{
	return [
	    'а' => 'a', 'б' => 'b', 'А' => 'A', 'Б' => 'B',
	    'в' => 'v', 'г' => 'g', 'В' => 'V', 'Г' => 'G',
	    'д' => 'd', 'е' => 'e', 'Д' => 'D', 'Е' => 'E',
	    'ж' => 'j', 'з' => 'z', 'Ж' => 'J', 'З' => 'Z',
	    'и' => 'i', 'й' => 'i', 'И' => 'I', 'Й' => 'I',
	    'к' => 'k', 'л' => 'l', 'К' => 'K', 'Л' => 'L',
	    'м' => 'm', 'н' => 'n', 'М' => 'M', 'Н' => 'N',
	    'о' => 'o', 'п' => 'p', 'О' => 'O', 'П' => 'P',
	    'р' => 'r', 'с' => 's', 'Р' => 'R', 'С' => 'S',
	    'т' => 't', 'у' => 'u', 'Т' => 'T', 'У' => 'U',
	    'ф' => 'f', 'х' => 'h', 'Ф' => 'F', 'Х' => 'H',
	    'ц' => 'c', 'ч' => 'ch', 'Ц' => 'C', 'Ч' => 'Ch',
	    'ш' => 'sh', 'щ' => 'sh', 'Ш' => 'Sh', 'Щ' => 'Sh',
	    'ъ' => '', 'ы' => 'i', 'Ъ' => '', 'Ы' => 'I',
	    'ь' => '', 'э' => 'e', 'Ь' => '', 'Э' => 'E',
	    'ю' => 'yu', 'я' => 'ya', 'Ю' => 'Yu', 'Я' => 'Ya'
	];
}
function translit($str) {
    return strtr($str, getTranslitArray());
}
echo translit("ленинградская") ;

echo "<br><hr>";
function spaceReplace($str) {
    return str_replace(" ", "_", $str);
}
echo "Московская область";
echo "<br><hr>";
            
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

for($i = 0; !($i > 10); plus($i), $i++);
	
function plus ($i) {
	echo $i . '<br>';
}        
  echo "<br><hr>";
          
    function k_cities($regions) {
    foreach ($cities as  $city) {
        foreach ($city as $town) {
            if (mb_substr($town, 0, 1) === "К") {
                echo "$town <br>";
            }
        }
    }
}        
            
            
?>
        </div>
    </div>

</body>

</html>
