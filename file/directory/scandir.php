<?php
// 目录就是文件夹
// 查找查看文件夹
$files = scandir('.');
foreach($files as $file) {
    if(!in_array($file, ['.', '..'])){ // 第一个参数是被查询的值 第二个参数是 被查询的数组 也就是判断$file 是否在 ['.','..']里.
        echo filetype($file)."\t\t".$file.'<hr/>';
    }
}