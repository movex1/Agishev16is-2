<?php

//Задание 1.1
$a = 3;
$c = $a;
echo $c;
echo "<br>";

//Задание 1.2
$a = 10;
$b = 2;
$sr = ($a+$b)/2;
echo ($a + $b)/$sr;
echo ($a - $b)/$sr;
echo ($a * $b)/$sr;
echo ($a / $b)/$sr;
echo "<br>";
//Задание 1.3
 $c = 15;
 $d = 2;
 $result = $c + $d;
 echo $result;
echo "<br>";

 //Задание 1.4
$a = 10;
$b = 2;
$c = 5;
$cr = ($a + $b + $c)/3;
echo ($a + $b + $c) / $cr;
echo "<br>";

//Задание 1.5
$a = 17;
$b = 10;
$c = $a - $b;
$d = 17;
$result = $c + $b;
echo $result;
echo "<br>";


//Задание 2.1

$text = 'Привет, мир';
echo $text.'Моя первая программа';
echo "<br>";

//Задание 2.2

$text1 = 'Привет';
$text2 = 'Мир';
echo $text1.$text1;
echo "<br>";

//Задание 2.3

$name = 'movex';
echo 'Привет,'.$name;
$text = 'Новый текст';
echo "<br>";

//Задание 2.4
$age = 227;
$height = 782;
echo 'Мой возраст:'. $age | 'Мой рост:'. $height;
echo "<br>";

//Задание 2.5
$text5 = 'abcde';
echo $text[0];
echo $text[2];
echo $text[4];
echo "<br>";

//Задание 3.1

$arr = [];
$arr = ['a', 'b', 'c'];
var_dump($arr[0]);
var_dump($arr[1]);
var_dump($arr[3]);
echo "<br>";

//Задание 3.2
print ($arr[0].$arr[1].$arr[2]);
echo "<br>";
//Заадие 3.3

$arr2 = ['a','b','c','d'];
print ($arr2[0].'+'.$arr2[1].','.$arr2[2].'+'.$arr2[3].','.$arr2[0].'-'.$arr2[3].','.$arr2[0].'/'.$arr2[3]);
echo "<br>";

//Задание 3.4

$arr3 = [2, 5, 3, 9];
$a = $arr3[0] * $arr3[1];
$b = $arr3[2] * $arr3[3];
$result = $a + $b;
echo $result;
echo "<br>";

//Задание 3.5
$arr4[0] = 1;
$arr4[1] = 2;
$arr4[2] = 3;
$arr4[3] = 4;
$arr4[4] = 5;
var_dump($arr4);
echo "<br>";

//Задание 4.1
$arr5 = ['a' => 11, 'b' => 20, 'c' => 30];
echo ($arr5['c']);
echo "<br>";

//Задание 4.2
$arr6 = ['q3' => 12, 'r3' => 23, 'f3' => 34];
echo $arr6['q3'] + $arr6['r3'] + $arr6['f3'];
echo "<br>";

//Задание 4.3
$arr7 = ['Коля' =>'1000$', 'Вася' => '500$', 'Петя' => '200$'];
echo$arr7['Петя'];
echo$arr7['Коля'];
echo "<br>";
//Задание 4.4
$arr8 = ['1' => 'Январь', '2' => 'Февраль',
    '3' => 'Март', '4' => 'Апрель', '5' => 'Май',
    '6' => 'Июнь', '7' => 'Июль', '8' => 'Август',
    '9' => 'Сентябрь', '10' => 'Октябрь', '11' => 'Ноябрь',
    '12' => 'Декабрь'];
echo$arr8['9'];
echo$arr8['6'];
echo "<br>";
