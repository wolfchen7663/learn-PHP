<?php
session_start();
// 自动加载
include 'vendor/autoload.php';
// 这个是定义用来处理异常的类
class Boot
{
    public function init()
    {
        set_exception_handler([$this, 'exception']);
    }
    public function exception($e)
    {
        if (method_exists($e, 'render')) {
            $e->render();
        } else {
            die($e);
        }
    }
}

(new Boot)->init();
