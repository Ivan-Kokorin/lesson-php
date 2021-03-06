<?php
#1) С помощью цикла while вывести все числа в промежутке от 0 до
#100, которые делятся на 3 без остатка.
$i = 0;
$num = [];
while ($i <= 100) {
  if ($i % 3 == 0){
    $num[]= $i;
  }
  $i++;
}
echo implode(',', $num) . "\n";
echo "<br>";
/*2) С помощью цикла do...while написать функцию для вывода чисел
от 0 до 10, чтобы результат выглядел так: 0 – это ноль. 1 – нечётное
число. 2 – чётное число. 3 – нечётное число. ... 10 – чётное число.*/
$i = 0;
do {
  if ($i == 0){
    echo $i . ' - это ноль. ';
  }elseif ($i % 2 == 0){
    echo $i . ' – чётное число. ';
  }else{
    echo $i . ' – нечётное число. ';
  }
  $i++;
}while ($i <= 10);

/*3) Объявить массив, в котором в качестве ключей будут
использоваться названия областей, а в качестве значений – массивы с
названиями городов из соответствующей области. Вывести в цикле
значения массива, чтобы результат был таким:
Московская область: Москва, Зеленоград, Клин.
Иркутская область: Иркутск, Ангарск, Братск, Железногорск-Илимский.
Красноярский край: ...*/
echo "<br>";
$region = [
  'Иркутская область' => [
    '0' => 'Иркутск',
    '1' => 'Ангарск',
    '2' => 'Братск',
    '3' => 'Черемхово'
    ],
  'Московская область' => [
    '0' => 'Москва',
    '1' => 'Зеленоград',
    '2' => 'Клин',
    '3' => 'Подольск'
  ],
  'Красноярский край'=> [
    '0' => 'Красноярск',
    '1' => 'Мариинск',
    '2' => 'Норильск',
    '3' => 'Минусинск'
  ]
];
foreach ($region as $key => $value) {
  echo $key . ': ';
  $i = 0;
  $city = [];
  while ($i < count($value)) {
    $city[] = $value[$i];
    $i++;
  }
  echo implode(', ', $city) . '.';
  echo "<br>";
}

/*4) Объявить массив, индексами которого являются буквы русского
языка, а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, ..., ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/
function translitiration($phrase){
	$translit_alphabet = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''];
	$phrase = mb_strtolower($phrase); // Можно было в массив занести значения заглавных букв, но здесь просто все приводятся к нижнему регистру
	$phrase_list = preg_split('//u', $phrase, NULL, PREG_SPLIT_NO_EMPTY); //массив из строки
	foreach ($phrase_list as $value) {
		if (array_key_exists($value, $translit_alphabet)){//в случае совпадения значения массива с ключами алфавита-транслитерации, выводим значение алфавита, все знаки препинания и пробелы идут в значении переводимой фразы
			echo $translit_alphabet[$value];
		}else{
			echo $value;
		}
	}
}
translitiration('Фраза дЛЯ транслитерации! Проверка, тест');
echo '<br>';

/*5) Написать функцию, которая заменяет в строке пробелы на
подчеркивания и возвращает видоизмененную строчку.*/
function not_space($str_phrase){
	//$list_phrase = explode(' ',$str_phrase);
	//return $str_not_space = implode('_', $list_phrase);
	return str_replace(' ', '_', $str_phrase);
}
echo not_space('Убираем пробелы в строке.');

/*6) В имеющемся шаблоне сайта заменить статичное меню (ul - li) на
генерируемое через PHP. Необходимо представить пункты меню как
элементы массива и вывести их циклом. Подумать, как можно
реализовать меню с вложенными подменю? Попробовать его
реализовать.*/
?>
<?php
$menu = [
	'Главная страница' => '#',
	'Каталог' => [
			'Вентиляторы' => '#',
			'Насосы' => '#',
			'Станции управления' => [
				'СУЗ' => '#',
				'СУиЗ' => '#',
				'HMS' => '#'
			]
		],
	'О компании' => '#',
	'Контакты' => '#',
	'Сертификаты' => '#',
	'Форум' => '#'
];
function print_menu($menu_assoc){
	$buffer = null;
	foreach ($menu_assoc as $name => $item_menu) {
		if (is_array($item_menu)){
			$buffer .= '<li class="nav__cat">' . $name;
			$buffer .= '<ul class="nav__item-cat">'. print_menu($item_menu) . '</ul>' . '</li>';
		}else{
			$buffer .= '<li>' . $name . '</li>';
			}
		}
	return $buffer;
}
	?>

<nav>
	<ul>
		<?php 
		echo print_menu($menu); 
		?>
	</ul>
</nav>

<!--<nav>
	<ul>
		<li>Главная страница</li>
		<li class="nav__cat">Каталог
			<ul class='nav__item-cat'>
				<li>Вентиляторы</li>
				<li>Насосы</li>
				<li>Станции управления</li>
			</ul>
		</li>
		<li>О компании</li>
		<li>Контакты</li>
		<li>Сертификаты</li>
		<li>Форум</li>
	</ul>
</nav>-->

<?php
/*7) Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело
цикла.*/
for ($i = 0; $i <= 9; print_r($i++ . ' ')){
// здесь пусто
};

/*8) Повторить третье задание, но вывести на экран только города,
начинающиеся с буквы «К».*/
echo "<br>";
$region = [
  'Иркутская область' => [
    '0' => 'Иркутск',
    '1' => 'Ангарск',
    '2' => 'Братск',
    '3' => 'Черемхово',
    '4' => 'Киренск'
    ],
  'Московская область' => [
    '0' => 'Москва',
    '1' => 'Зеленоград',
    '2' => 'Клин',
    '3' => 'Подольск',
    '4' => 'Коломна'
  ],
  'Красноярский край'=> [
    '0' => 'Красноярск',
    '1' => 'Мариинск',
    '2' => 'Норильск',
    '3' => 'Минусинск'
  ]
];
foreach ($region as $key => $value) {
  echo $key . ': ';
  $i = 0;
  $city = [];
  while ($i < count($value)) {
    $temp_list = preg_split('//u', $value[$i], NULL, PREG_SPLIT_NO_EMPTY);
    if ($temp_list[0] == 'К'){
    	$city[] = $value[$i];
    }
    $i++;
  }
  echo implode(', ', $city) . '.';
  echo "<br>";
}

/*9) Объединить две ранее написанные функции в одну, которая
получает строку на русском языке, производит транслитерацию и
замену пробелов на подчеркивания (аналогичная задача решается при
конструировании url-адресов на основе названия статьи в блогах).*/
function new_translitiration($phrase){
	$translit_phrase = '';
	$translit_alphabet = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''];
	$phrase = mb_strtolower($phrase); 
	$phrase_list = preg_split('//u', $phrase, NULL, PREG_SPLIT_NO_EMPTY); //массив из строки
	foreach ($phrase_list as $value) {
		if (array_key_exists($value, $translit_alphabet)){
			$translit_phrase .= $translit_alphabet[$value];
		}else{
			$translit_phrase .= $value;
		}
	}
	return str_replace(' ', '_', $translit_phrase);
}

echo new_translitiration('текст переведён в формат ссылок');
echo '<br>';
?>