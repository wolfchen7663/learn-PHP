<?php
// 获取目录大小
function dirSize(string $dir): int
{
    $size = 0;
    foreach (glob($dir . '/*') as $file) {
        $size += is_file($file) ? filesize($file) : dirSize($file);
    }
    return $size;
}
// echo dirSize('..');

include '../../basicFunction/translateToByte.php';

echo translateToByte(dirSize('.'));
