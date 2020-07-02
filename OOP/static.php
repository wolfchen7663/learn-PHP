<?php
class USer
{
    protected $name; // 每个对象独有的变量
    protected static $className = 'class-one'; // 静态变量 只能通过类来调用
    public static function getClassName()
    { // 静态方法 只能通过类来调用 是服务于所有对象的 不涉及对象自己的属性
        return 'hello';
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        self::getClassName();
        return $this->name . ' ' . self::$className; // self 代表的是 USer
    }
}

$studentOne = new User;
$studentOne->setName("chen");
echo $studentOne->getName();
echo "<hr/>";
$studentTwo = new User;
$studentTwo->setName("wei");
echo $studentTwo->getName();
