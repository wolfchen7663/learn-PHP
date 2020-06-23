<?php
// 禁止贪婪匹配（重复匹配）

$str = '<h1>你好</h1><h1>陈卫</h1>';
$preg = '/<h1>(.+?)<\/h1>/';
$replace = '<h1><em>\1</em></h1>';
$status = preg_replace($preg, $replace, $str);
echo $status;

preg_match_all($preg, $str, $arr);
print_r($arr);

/*
(
    [0] => Array
        (
            [0] => <h1>你好</h1>
            [1] => <h1>陈卫</h1>
        )

    [1] => Array
        (
            [0] => 你好
            [1] => 陈卫
        )

)
 */
