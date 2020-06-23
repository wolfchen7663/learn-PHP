<?php
//常用的正则表达式函数
// 将大于2的数值加100
$str = '1@2#3';
$preg = '/\d+/';
echo preg_replace_callback($preg, function($match){
    if($match[0]>2) {
        return $match[0] + 100;
    }
    return $match[0];
}, $str);

