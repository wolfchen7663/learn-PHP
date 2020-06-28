<?php
// 生成验证码 随机生成密码
function code(int $len = 5): string
{
    $model = "1234567890asdfghjkl.";
    $code = "";
    for ($i = 0; $i < $len; $i++) {
        $index = mt_rand(0, strlen($model) - 1);
        $code .= strtoupper($model[$index]);
    }
    return $code;
}
