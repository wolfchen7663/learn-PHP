<?php
function countSpace(int $total): string
{
    $config = [3 => "GB", 2 => "MB", 1 => "KB"];
    foreach ($config as $num => $unit) {
        if ($total > pow(1024, $num)) {
            return round($total / pow(1024, $num)) . $unit;
        }
    }
}

// echo countSpace(60737418390); // 57GB

// echo(pow(1024, 3));