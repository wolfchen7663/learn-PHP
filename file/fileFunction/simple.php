<?php
// feof() 文件读取是否结束
// $handle = fopen('cw.txt','rb');
// echo fread($handle, 1);
// var_dump(feof($handle));

// while(!feof($handle)) {
//     echo fread($handle, 1);
// }

// fgetc() 每次只读取一个字符
// while(!feof($handle)) {
//     echo fgetc($handle);
// }

// fgets() 每次读取一行
// while(!feof($handle)) {
//     echo fgets($handle);
// }

// fgetcsv() 返回数组
$filename = 'jx.txt';
$handle = fopen($filename, 'rb');
print_r(fgetcsv($handle, filesize($filename),'|'));