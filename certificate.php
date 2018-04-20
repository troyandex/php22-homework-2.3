<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

$name = $_GET['name'];
$post_true = $_GET['post_true'];
$post_false = $_GET['post_false'];
$result_true = $_GET['result_true'];
$result = $_GET['result'];

$title = $_GET['title'];

//Устанавливаем тип содержимого
header('content-type: image/png');

//Определяем размеры изображения
//125px width, 125px height
$image = imagecreate(200, 300);

//Выбираем цвета
$blue = imagecolorallocate($image, 102, 217, 255);
$dark = imagecolorallocate($image, 0, 41, 36);

//Указываем путь к шрифту
$font_path = 'advent_light';

//Пишем текст
/*$string =   "Сертификат о прохождении теста " . $title . ": <br>
            Участник - " . $name . ": <br>
            Количество верных ответов - " . $post_true . ": <br>
            Количество ошибок - " . $result_true . ": <br><br>
            Результат теста - " . $result;*/
$string = "$name";

//Соединяем текст и картинку
imagettftext($image, 50, 0, 10, 10, $white, $font_path, $string);

//Сохраняем файл в формате png и выводим его
imagepng($image);

//Чистим использованную память
imagedestroy($image);