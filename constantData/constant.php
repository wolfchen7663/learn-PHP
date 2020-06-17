<?php
/**常量 一般都是不变的量*/
// 第一种定义方式
define('NAME', 'chinwe');
//第二种方式
const URL = "laixiezi.com";

/**常量不受任何的访问限制 ,不受作用域的限制*/
const USER = "chen";
function show() {
    echo USER;
}
show();

//检测常量是否已经定义
print_r(defined("USER"));

echo PHP_VERSION;
echo PHP_OS;
