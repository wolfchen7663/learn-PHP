<?php
$files = glob('./*.php'); // 查看所有的目录
// 遍历多种类型文件
$files = glob("{./*.php, ./*.txt}", GLOB_BRACE);
print_r($files);