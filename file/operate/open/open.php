<?php
$filename = 'cw.md';
$handle = fopen($filename, 'r');
$filesize = filesize($filename);
echo fread($handle, 4);
echo '<hr/>';
echo fread($handle,$filesize);
// fseek() 控制指针 也就是移动光标
