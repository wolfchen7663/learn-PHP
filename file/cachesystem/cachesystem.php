<?php
// filemtime() 文件的修改时间 返回的是时间戳

 $name = 'cw';
 include 'blade.php';

 if(is_file('cache.php') && filemtime('cache.php')>(time()-20)) {
     include 'cache.php';
     echo 'is cached..';
 }else {
     ob_start();
     include 'blade.php';
     $contents = ob_get_clean();
     file_put_contents('cache.php', $contents);
 }
