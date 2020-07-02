<?php
// 如果父类的方法需要调用子类的具有子类特点的方法，那么父类就变成抽象类，然后添加一个抽象方法
// 强制子类定义这个方法

abstract class Father
{
    abstract public function fromSon();
    public function show()
    {
        return $this->fromSon();
    }
}

class Son extends Father
{
    public function fromSon()
    {
        return 'hello world';
    }
}
