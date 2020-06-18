<?php
$status = "success";
switch ($status) {
    case 'success':
        echo "success";
        break;
    // 前面都不满足，那么就输出default
    default:
        echo "default";
        break;
}