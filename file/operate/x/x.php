<?php
// x 文件存在就会报错
$filename = 'cw'.time().'md';
$handle = fopen($filename, 'x+');
fwrite($handle, 'cw is very handsome');
fseek($handle, 0);
echo fread($handle, filesize($filename));
fclose($handle);