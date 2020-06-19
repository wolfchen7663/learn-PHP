<?php
// 阶乘
function recursive(int $num) {
    if($num == 1) {
        return 1;
    }
    return $num * recursive($num-1);
}
echo recursive(10);