<?php

namespace App;

include 'Order.php';
include 'Comment.php';

class USer
{
    public static function show()
    {
        echo __METHOD__;
    }
}

User::show(); //这个时候是在命名空间App下调用
Controller\Order::show(); //这个时候是在命名空间App\Controller下调用
\Common\Comment::show(); // 这个是在根目录下的命名空间Common下调用 \开头表示是根目录
