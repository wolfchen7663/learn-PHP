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
// 实心的都是fill

//填充画布
imagefill($res, 0, 0, $red);
imagesetthickness($res, 4);
// 绘制空心矩形
imagerectangle($res, 100, 100, 400, 400, $blue);
// 绘制实心矩形
imagefilledrectangle($res, 200, 200, 300, 300, $green);
// 绘制空心圆形(可以是椭圆)
imageellipse($res, 250, 250, 400, 400, $black);
//绘制实心圆形
imagefilledellipse($res, 250, 250, 30, 30, $random_color);
// 绘制线条
imageline($res, 0, 0, 500, 500, $random_color);
imageline($res, 500, 0, 0, 500, $random_color);
//保存画布 一般用于加水印
imagepng($res, 'myImg.png');
// 输出画布
imagepng($res);
// 清理画布，释放内存
imagedestroy($res);