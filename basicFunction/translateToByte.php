<?php
// 转换大小
function translateToByte(int $size): string
{
    $config = [3 => "GB", 2 => "MB", 1 => "KB"];
    foreach ($config as $num => $unit) {
        if ($size > pow(1024, $num)) {
            return round($size / pow(1024, $num), 2) . $unit;
        }
    }
}
