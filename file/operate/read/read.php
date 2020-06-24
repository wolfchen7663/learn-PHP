<?php
// r 只读
// r+ 读写
// rb 二进制
// r+b 二进制
$filename = 'cw.md';
$handle = fopen($filename, 'r+b'); // 读取 写入
echo fread($handle, filesize($filename));
fwrite($handle, 'good idea');
echo fread($handle, filesize($filename));