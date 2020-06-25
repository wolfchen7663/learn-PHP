<?php
// very dangerous!!!!
// 1 复制
// 2 删除
// 3 移动

function copyDir(string $dir, string $to): bool
{
    is_dir($to) or mkdir($to, 0755, true);
    foreach (glob($dir . '/*') as $file) {
        $target = $to . '/' . basename($file);
        is_file($file) ? copy($file, $target) : copyDir($file, $target);
    }
    return true;
}

// copyDir('../../../myphp', '../../../php');


function delDir(string $dir): bool
{
    if (!is_dir($dir)) {
        return true;
    }
    foreach (glob($dir . '/*') as $file) {
        is_file($file) ? unlink($file) : delDir($file);
    }
    return rmdir($dir);
}

// delDir('../../../php');

function moveDir(string $dir, string $to): bool
{
    copyDir($dir, $to);
    return  delDir($dir);
}

moveDir('../../../myphp', '../../../cw');
