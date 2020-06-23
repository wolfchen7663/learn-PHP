<?php
echo ceil(10.2);
echo "<hr/>";
echo floor(10.2);
echo "<hr/>";
echo max(1, 3);
echo "<hr/>";
echo min(9, 0);
echo "<hr/>";
echo round(10.3);
echo "<hr/>";
echo mt_rand(0,2); // 0 和 2 都可以取到

// 生成验证码 随机生成密码
function code(int $len=5):string{
    $model = "1234567890asdfghjkl.";
    $code = "";
    for($i = 0; $i < $len; $i++) {
        $index = mt_rand(0, strlen($model)-1);
        $code.=strtoupper($model[$index]);
    }
    return $code;
}

echo code(8)."<hr/>";
