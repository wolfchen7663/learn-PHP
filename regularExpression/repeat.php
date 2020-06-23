<?php
// 重复匹配

/**
* 零次或者多次
+ 一次或者多次
? 零次或者一次
{n} 重复n次
{n,} 重复n次或者更多次
{n,m} 重复n次到m次
 * 
 */

// $web = 'https://www.baidu.com';
// $preg = '/^https?:\/\/(.+)\.(com|cn|net|org)$/';
// $status = preg_match($preg, $web);
// var_dump($status);

$site = '<h1>Hello</h1>';
$preg = '@<h1>(.+)</h1>@';
$replace = '<h1><a href="https://www.baidu.com">\1</a></h1>';
echo preg_replace($preg, $replace, $site);

