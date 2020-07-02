<?php
// 禁止重写 保护父类的方法
class Father
{
    public final function say()
    { // final 关键词 禁止重写

    }
}

class Son extends Father
{
    public function say()
    {
        // 调用的时候 会报错
    }
}
