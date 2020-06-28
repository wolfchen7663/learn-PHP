<?php
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

//填充画布
imagefill($res, 0, 0, $white);
// 绘制干扰点
for ($i = 0; $i < 5000; $i++) {
    imagesetpixel($res, mt_rand(0, 500), mt_rand(0, 500), $red);
}
// 绘制干扰线
for ($i = 0; $i < 1000; $i++) {
    imageline($res, mt_rand(0, 500), mt_rand(0, 500), mt_rand(0, 500), mt_rand(0, 500), $blue);
}
imagepng($res);
