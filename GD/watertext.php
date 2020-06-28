<?php
//告诉浏览器我们给它传递的内容的类型
header('Content-type:image/png');
// 创建画布
$res = imagecreatetruecolor(500, 500);
// 配置颜色
$random_color = imagecolorallocate($res, mt_rand(0, 255),  mt_rand(0, 255), mt_rand(0, 255)); // 随机色
$black = imagecolorallocate($res, 0, 0, 0);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
$blue = imagecolorallocate($res, 0, 0, 255);
$white = imagecolorallocate($res, 255, 255, 255);
imagefill($res, 0, 0, $white);
$size = 20;
$angle = 0;
$font = realpath('Cascadia.ttf'); // 谨记 一定是相对路径
$text = 'handsome';
// 将文本放在盒子中，
$text_box = imagettfbbox($size, $angle, $font, $text);
$width = abs($text_box[2] - $text_box[0]);
$height = abs($text_box[1] - $text_box[7]);
// print_r($text_box);
//并在画布中摆字
imagettftext($res, $size, $angle, 250 - $width / 2, 250 + $height / 2, $red, $font, $text); // 居中
// print_r($text_box);
imagepng($res);
imagedestroy($res);
