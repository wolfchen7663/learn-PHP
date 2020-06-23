<?php
// i 不区分大小写
// s 将换行符删除 多行当成单行来干
// x 忽略正则的空白和注释
// U 禁止贪婪匹配
// A 相当于^
// m 进行多行处理

$str = '<h1>Hello</h1><H2>World</H2>';
$preg = '/<h([1-6])>(.*?)<\/h\1>/i';
$result = preg_replace($preg, '\2', $str);
echo $result;
