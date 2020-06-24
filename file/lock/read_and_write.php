<?php
// LOCK_UN 解锁
// LOCK_SH 读锁 也就是意味着 可以同时读，但是在当其中一个在读的时候，其他的不可以写
// LOCK_EX 写锁 也就是意味着 其中一个在写的时候，其余的读都不可以，更不谈写了
$handle = fopen('cw.txt', 'rb');
flock($handle, LOCK_SH);
fread($handle, 9999);
sleep(3);
flock($handle, LOCK_UN);
fclose($handle);

// $handle = fopen('cw.txt', 'wb');
// flock($handle, LOCK_EX);