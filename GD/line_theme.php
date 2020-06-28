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

//填充画布
imagefill($res, 0, 0, $red);
//设置线条的宽度
imagesetthickness($res, 10);

//绘制实线
imageline($res, 0, 0, 500, 500, $random_color);

imagesetstyle($res, [$red, $blue, $green]);
imageline($res, 500, 0, 0, 500, IMG_COLOR_STYLED);
//输出画布
imagepng($res);
