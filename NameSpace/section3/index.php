<?php

namespace App;

include 'helper.php';
// function show()
// {
//     echo "app";
// }
class User
{
    public static function show()
    {
        echo __METHOD__;
    }
}
/**
 * 在'helper.php'中没有命名空间的话，这里的show()执行，系统会先在App里找，如果没有则会在全局中去找
 */
// show(); //function show

/**
 * 这里的show()执行，是在Helper里面找show()
 */
\Helper\show(); // 
echo NAME;
echo \Helper\AGE;

/**
 * 尽量将各种方法放在对象里，然后使用命名空间去限制,减少不必要的冲突
 */
