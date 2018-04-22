<?php
header('Content-Type: image/png');
$img = imagecreatefromjpeg('img/image.jpg'); // 500*226
$color = imagecolorallocate($img,60,80,100);

// $font_file = 'fonts/OpenSans.ttf';
// imagefttext($img, 13, 0, 100, 50, $color, $font_file, 'PHP');

//////////////////////////////////////////////////////////////////////////////////////////
/*  Когда разберусь с шрифтом - нужно будет доработать код ниже - по моему должен работать
ini_set("display_errors", "1");
error_reporting(E_ALL);

// значение для переменных по умолчанию (если не были переданы)
$name = (isset($_GET['name'])) ? $_GET['name'] : '';
//$post_true = (isset($_GET['post_true'])) ? $_GET['post_true'] : '';
//$post_false = (isset($_GET['post_false'])) ? $_GET['post_false'] : '';
//$result_true = (isset($_GET['result_true'])) ? $_GET['result_true'] : '';
$result = (isset($_GET['result'])) ? $_GET['result'] : '';
$title = (isset($_GET['title'])) ? $_GET['title'] : '';

$name = $_GET['name'];
//$post_true = $_GET['post_true'];
//$post_false = $_GET['post_false'];
//$result_true = $_GET['result_true'];
$result = $_GET['result'];
$title = $_GET['title'];

header('Content-Type: image/png');
// Создаем картинку и цвет шрифта
$img = imagecreatefromjpeg('img/image.jpg'); // 500*226
$color = imagecolorallocate($img,60,80,100);

// Распологаем все данные на картинке
// расположение нужно будет подобрать
imagettftext($img, 50, 0, 100, 90, $white, 'fonts/OpenSans.ttf', 'О прохождении теста:' . $title);
imagettftext($img, 50, 0, 125, 90, $white, 'fonts/OpenSans.ttf', 'Пользователем:' .$name);
imagettftext($img, 50, 0, 150, 90   , $white, 'fonts/OpenSans.ttf', 'Результат: ' . $result);

*/
//////////////////////////////////////////////////////////////////////////////////////////

imagepng($img);
imagedestroy($img);