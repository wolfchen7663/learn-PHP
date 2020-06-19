<?php
/** 严格模式 约束参数类型*/
/**这样的程序更加的健壮 */

declare(strict_types=1);
function sum(int ...$nums) {
    return array_sum($nums);
}
echo sum(1, 3, 4, 4, 6, 9);

function make():int // 对返回值进行约束
{
    return 1;
}

function use():void {// 函数不需要返回值

}