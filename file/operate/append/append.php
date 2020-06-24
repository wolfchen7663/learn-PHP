<?php
$filename = 'cw.md';
$handle = fopen($filename, 'a+b');
fwrite($handle, 'very good');
fseek($handle, 0);
echo fread($handle, filesize($filename));
fclose($handle);
