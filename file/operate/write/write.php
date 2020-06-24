<?php
// w 只写
// w+ 写读
// wb 二进制
// w+b 二进制
$filename = 'cw.md';
$handle  = fopen($filename, 'w+b'); // 文件不存在会创建文件，文件存在会清除文件内容
fwrite($handle, 'day day up!!!');
fseek($handle, 0);
echo fread($handle, filesize($filename));
fclose($handle);