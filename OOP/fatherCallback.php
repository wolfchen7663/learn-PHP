<?php
class Father
{
    public function show()
    {
        echo "father";
    }
}

class Son extends Father
{
    public function show()
    {
        // code ......做点自己的事情
        echo "son's own action";
        parent::show(); // 保留父类遗留下来的功能
    }
}

$child = new Son;
$child->show();
