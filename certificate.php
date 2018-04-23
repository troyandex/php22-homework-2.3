<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

// значения по умолчанию
$name = (isset($_GET['name'])) ? $_GET['name'] : '';
$result = (isset($_GET['result'])) ? $_GET['result'] : '';
$title = (isset($_GET['title'])) ? $_GET['title'] : '';

header('Content-Type: image/png');
$img = imagecreatefromjpeg('img/image.jpg'); // 500*226
$color = imagecolorallocate($img,60,80,100);

$font_file = './fonts/OpenSans.ttf';
imagettftext($img, 12, 0, 70, 100, $color, $font_file, "О прохождении теста: $title");
imagettftext($img, 12, 0, 70, 125, $color, $font_file, "Пользователем: $name");
imagettftext($img, 12, 0, 70, 150, $color, $font_file, "Результат: $result");

imagepng($img);
imagedestroy($img);