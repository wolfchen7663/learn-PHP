<?php
// \d 0-9
// \D 除了0-9
// \w a-zA-Z0-9_
// \W 除了a-zA-Z0-9_
// \s 匹配任意空白
// \S 除了匹配任意空白
// \n 换行符
// \t 制表符

$status = preg_match("/a/", "agb");
echo $status; 
var_dump($status);