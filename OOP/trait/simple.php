<?php
// trait 类可以被多继承
trait Log
{
    public function save()
    {
        return __METHOD__;
    }
}
trait Comment
{
    public function total()
    {
        return __METHOD__;
    }
}
class Site
{
    public function total()
    {
        echo __METHOD__;
    }
}
class Topic extends Site
{
    use Log, Comment;
}

$topic = new Topic;
echo $topic->total(); // Comment::total
//在调用方法时, trait 类的方法的优先级高于extends的类的方法
