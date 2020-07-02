<?php
class User
{
    // const 类常量 永远不会被改变 也必须用类直接调用
    const MUST_VALIDATE = 3;
    public function get()
    {
        return self::MUST_VALIDATE;
    }
}
echo User::MUST_VALIDATE;
