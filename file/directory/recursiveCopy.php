<?php
// 深拷贝
function dirCopy($dirStart, $dirDest): bool
{
    is_dir($dirDest) || mkdir($dirDest, 0755, true);
    foreach (glob($dirStart . '/*') as $file) {
        $target = $dirDest . '/' . basename($file);
        is_file($file) ? copy($file, $target) : dirCopy($file, $target);
    }
    return true;
}

dirCopy('../../../Learn-PHP', '../../../PHP');
// echo dirname(__FILE__);
