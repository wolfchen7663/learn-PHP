<?php
// 原子表
// [abc] 取abc其中一个都可以
// . 可以匹配除了换行符之外的任意字符
// ^ 取反
// 拆分字符串,用正则表达式拆分感觉更灵活
$str = "1.jpg@2.jpg#3.jpg";
$file_array = preg_split("/[@#]/",$str);
$file_string = implode(" | ", $file_array);
echo $file_string;
