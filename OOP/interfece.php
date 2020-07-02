<?php
// 接口定义规范，是为了统一管理 让程序变得健壮 
interface InterfaceCache
{
    public function set($name, $value);
    public function get($name);
}

class Mysql implements InterfaceCache
{
    public function set($name, $value)
    {
    }
    public function get($name)
    {
    }
}

class Redis implements InterfaceCache
{
    public function set($name, $value)
    {
    }
    public function get($name)
    {
    }
}

class Cache
{
    public static function instance(string $driver)
    {
        switch (strtolower($driver)) {
            case 'mysql':
                return new Mysql;
            case 'redis':
                return new Redis;
        }
    }
}

$cache = Cache::instance('mysql');
var_dump($cache->get('name'));
