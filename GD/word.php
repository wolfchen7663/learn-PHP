<?php
//告诉浏览器我们给它传递的内容的类型
header('Content-type:image/png');
// 创建画布
$res = imagecreatetruecolor(500, 500);
// 配置颜色
$random_color = imagecolorallocate($res, mt_rand(200, 255),  mt_rand(0, 25), mt_rand(150, 255)); // 随机色
$black = imagecolorallocate($res, 0, 0, 0);
$red = imagecolorallocate($res, 255, 0, 0);
$green = imagecolorallocate($res, 0, 255, 0);
$blue = imagecolorallocate($res, 0, 0, 255);
$white = imagecolorallocate($res, 255, 255, 255);

imagefill($res, 0, 0, $white);

// 绘制干扰线
for ($i = 0; $i < 50; $i++) {
    imageline($res, mt_rand(0, 200), mt_rand(100, 150), mt_rand(0, 200), mt_rand(100, 150), $blue);
}

$font = realpath('Cascadia.ttf');
// 生成验证码 随机生成密码
function code(int $len = 5): string
{
    $model = "0123456789abcdefghijklmnopqrstuvwxyz";
    $code = "";
    for ($i = 0; $i < $len; $i++) {
        $index = mt_rand(0, strlen($model) - 1);
        $code .= strtoupper($model[$index]);
    }
    return $code;
}
$text = code(6);
for ($i = 0; $i < strlen($text); $i++) {
    imagettftext($res, mt_rand(15, 25), mt_rand(-30, 30), ($i+1)*20, 130, $random_color, $font, $text[$i]);
}

imagepng($res);
imagedestroy($res);
