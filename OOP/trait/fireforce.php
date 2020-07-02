<?php
trait Log
{
    public function save()
    {
        return __METHOD__;
    }
}
trait Site
{

    public function getSiteName()
    {
        return 'cw.com';
    }
}
trait Comment
{
    use Site;
    abstract public function name();
    public static function show()
    {
        return 'show.....static';
    }
    public function save()
    {
        return __METHOD__;
    }
}

class Topic
{
    // 当方法重名而变得冲突时
    use Log, Comment {
        //使用其中一个而不是其他的
        Log::save insteadof Comment;
        // 其他的起个别的名字
        Comment::save as protected send; // protected 修改权限 外部调用不到
    }
    public function name()
    {
    }
}

$topic = new Topic;
// echo $topic->save(); 
echo $topic->send();
