<?php
//自动加载
//函数方式
// spl_autoload_register(function ($class) {
//     // echo $class; //App\Module\Shop\Controller\User
//     $file = str_replace('\\', '/', $class) . '.php';
//     require $file;
// });

//面向对象的方式
class Bootstrap
{
    public static function boot()
    {
        spl_autoload_register([new self, 'autoload']);
    }
    public function autoload(string $class)
    {
        $file = str_replace('\\', '/', $class) . '.php';
        require $file;
    }
}

Bootstrap::boot();

//php 回调函数可以是这种这种[$this, $function]
  