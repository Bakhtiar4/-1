<?php
//Часть 1
// Работа с переменными
//  1.Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран c использованием другой переменной.
$a = 3;
echo($a);
// 2.Создайте переменные $a=10 и $b=2. Рассчитать их сумму, разность, произведение и частное (результат деления).  Вывести на экран результаты вычислений, поделенных на среднее значение этих переменных.
$a = 10;
$b = 2;
var_dump($a + $b);
var_dump($a - $b);
var_dump($a * $b);
var_dump($a / $b);
//3.Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
//4.Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму деленное на среднее значение этих переменных.
$a = 10;
$b = 2;
$c = 5;
var_dump($a + $b + $c);
//5.	Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 17. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
echo '<hr>';



//Часть 2
//Работа со строками
//1.	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран, дополнив текст «Моя первая программа!».
$text = 'Привет, Мир!';
echo $text;
//2.	Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo "$text1$text2";
echo $text1 . $text2;
//3.	Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. Создайте переменную $text и присвойте ей текст с новой строки 'Новый текст'.
$name = 'Sergey!';
echo "Привет, $name";
//4.	Создайте переменную $age и присвойте ей любой возраст. Создайте переменную $height и присвойте ей любой рост. Выведите на экран 'Мой возраст: %Возраст%' и продолжите текст 'Мой рост: %Рост%' разделив символом |.
$age = 28;
echo "Мне $age лет!";
//5.	Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
$text = 'abcde';
var_dump($text[0]);
var_dump($text[2]);
var_dump($text[4]);


//Часть 3
//Работа с массивами
//1.	Создайте массив $arr, который имеет следующие значения ['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump(), в том числе каждый элемент массива отдельно.
$arr = ['a', 'b', 'c'];
var_dump($arr);
//2.	С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов, объединив в одну строку.
for ($i = 0; $i < 3; $i++) {
    echo("'<br>' $arr[$i]");
}
//3.	Создайте массив $arr, который имеет следующие значения ['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d, a-d, a/d'.
$arr = ['a', 'b', 'c', 'd'];
$str = "$arr[0]+$arr[1], $arr[2]+$arr[3]";
var_dump($str);
//4.	Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.
$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
var_dump($result);
//5.	Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] новое значение со случайными ключами (индексами).
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
echo '<hr>';



//Часть 4
//Ассоциативные массивы
//1.	Создайте массив $arr. Выведите на экран элемент с ключом 'c' и сумму чисел в массиве не используя функции для работы с масиивами.
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump($arr['c']);
//2.Создайте массив $arr. Найдите сумму элементов этого массива.
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(array_sum($arr));
//3.Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
var_dump('Зарплата Коли = ' . $arr['Коля']);
var_dump('Зарплата Пети = ' . $arr['Петя']);
//4.	Создайте ассоциативный массив месяцев года. Ключами в нем должны служить номера месяцев. Выведите на экран первый и последний месяцы учебного года.
$days = [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Субота', 7 => 'Воскресенье'];
var_dump($days[2]);
//5.	Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.
$day = 3;
var_dump($days[$day]);
